<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Services\OpenAIService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RomanController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Hello World!']);
    }

    public function books()
    {
        $books = Book::all();
        return BookResource::collection($books);
    }

    public function addBooks(Request $request, OpenAIService $openAIService)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required'
        ]);

        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
        ]);

        $description = $openAIService->roman($request->title);
        $book->description = $description;
        $book->save();

        return response()->json([
            'description' => $description
        ]);
    }

}
