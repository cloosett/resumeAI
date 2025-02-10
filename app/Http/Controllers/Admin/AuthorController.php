<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::authors()->paginate(10);
        return view('admin.author', compact('authors'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.authorcreate', compact('users'));
    }

    public function store(Request $request){
        $user = User::find($request->author);
        $user->assignRole('author');
        return redirect()->route('admin.author');
    }
}
