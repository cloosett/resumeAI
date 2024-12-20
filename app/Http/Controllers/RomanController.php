<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

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
}
