<?php

namespace App\Http\Controllers;

use App\Models\PostManual;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => 'Posts',
            "posts" =>  PostManual::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            'title' => "Single PostManual",
            "post" => PostManual::find($slug)
        ]);
    }
}
