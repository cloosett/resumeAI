<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cookie;


class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search', Cookie::get('search', ''));
        $sortColumn = $request->input('sort', Cookie::get('sort', 'id'));
        $sortDirection = $request->input('direction', Cookie::get('direction', 'asc'));

        $blogs = Blog::where('id', '=', $search)
            ->orWhere('title', 'LIKE', "%{$search}%")
            ->orWhere('slug', 'LIKE', "%{$search}%")
            ->orWhere('meta_title', 'LIKE', "%{$search}%")
            ->orWhere('meta_description', 'LIKE', "%{$search}%")
            ->orderBy($sortColumn, $sortDirection)
            ->paginate(10);

        Cookie::queue('search', $search, 60 * 24 * 30);
        Cookie::queue('sort', $sortColumn, 60 * 24 * 30);
        Cookie::queue('direction', $sortDirection, 60 * 24 * 30);

        return view('admin.blog', compact('blogs', 'search', 'sortColumn', 'sortDirection'));
    }

    public function create()
    {
        $authors = User::authors()->get();
        return view('admin.blogcreate', compact('authors'));
    }

    public function store(Request $request)
    {
        $imagePath = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imageName = time() . '.webp';
            $imagePath = $image->storeAs('images/blogs', $imageName, 'public');

            $img = \Image::make(storage_path('app/public/' . $imagePath));
            $img->encode('webp', 90);
            $img->save(storage_path('app/public/' . $imagePath));
        }
        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'image' => $imagePath,
            'slug' => $request->slug,
            'author_id' => $request->author_id,
            'status' => $request->status
        ]);

        return redirect()->route('admin.blog');
    }

    public function edit(Blog $blog)
    {
        // Завантажуємо релейшн 'comments' разом з блогом
        $authors = User::authors()->get();
        $blog = Blog::with('comments')->find($blog->id);
        return view('admin.blogedit', compact('blog', 'authors'));
    }

    public function update(Request $request, Blog $blog)
    {
        // Ініціалізація змінної для шляху до зображення
        $imagePath = $blog->image;

        // Перевірка, чи є нове зображення
        if ($request->hasFile('image')) {
            // Валідація для нового зображення
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:2048', // або інші правила за потребою
            ]);

            // Видалення старого зображення, якщо воно існує
            if ($blog->image && Storage::exists('public/' . $blog->image)) {
                Storage::delete('public/' . $blog->image);
            }

            // Отримуємо файл зображення
            $image = $request->file('image');

            // Генеруємо нове ім'я для зображення з часом, щоб уникнути конфліктів
            $imageName = time() . '.webp';

            // Зберігаємо зображення тимчасово в oригінальному форматі
            $imagePath = $image->storeAs('images/blogs', $imageName, 'public');

            // Обробляємо зображення в формат webp
            $img = \Image::make(storage_path('app/public/' . $imagePath));
            $img->encode('webp', 90); // 90 - це рівень якості
            $img->save(storage_path('app/public/images/blogs/' . $imageName)); // Зберігаємо в форматі webp

            // Оновлюємо шлях до зображення в базі даних
            $imagePath = 'images/blogs/' . $imageName;
        }

        // Оновлення блогу з новими або старими даними
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'image' => $imagePath, // Записуємо нове або старе зображення
            'slug' => $request->slug,
            'author_id' => $request->author_id,
            'status' => $request->status
        ]);

        return redirect()->route('admin.blog');
    }


    public function destroy(Blog $blog)
    {
        if ($blog->image && Storage::exists('public/' . $blog->image)) {
            Storage::delete('public/' . $blog->image);
        }
        $blog->delete();
        return redirect()->route('admin.blog');
    }

    public function tagsIndex()
    {
        $tag = Tag::first();
        return view('admin.blogtags', compact('tag'));
    }

    public function tagsStore(Request $request)
    {
        Tag::updateOrCreateTag($request->tag, $request->status);

        return redirect()->route('admin.tags');
    }
    public function updateCommentStatus($commentId, Request $request)
    {
        // Знайдемо коментар за його ID
        $comment = Comment::findOrFail($commentId);

        // Оновимо статус коментаря
        $comment->status = $request->status_comment;
        $comment->save();

        // Перенаправимо назад до блогу з повідомленням про успіх
        return redirect()->back()->with('success', 'Comment status updated successfully!');
    }


}
