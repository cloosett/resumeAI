<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->with('comments')->published()->paginate(5);

        $recentBlogs = Blog::latest()->published()->take(3)->get();
        $tag = Tag::published()->first();
        $arrTag = $tag ? explode(',', $tag->name) : [];

        return view('blog', compact('blogs', 'recentBlogs', 'arrTag'));
    }

    public function show(string $slug){
        $blog = Blog::where('slug', $slug)->published()->first();
        $recentBlogs = Blog::latest()->published()->take(3)->get();
        $comments = $blog->comments()->where('status', 'approved')->get();
        $tag = Tag::published()->first();
        $arrTag = $tag ? explode(',', $tag->name) : [];
        return view('singleblog', compact('blog', 'recentBlogs', 'arrTag', 'comments'));
    }

    public function storeComment(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string|max:5000',
        ]);

        $blog = Blog::where('slug', $request->slug)->first();
        $blog->comments()->create([
            'author_name' => $request->name,
            'author_email' => $request->email,
            'content' => $request->content,
        ]);
        return redirect()->back()->with('success', 'Comment posted successfully!');
    }
}
