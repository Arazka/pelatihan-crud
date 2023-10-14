<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function tampil()
    {   
        $posts = POST::all();

        return view('post.index', ['data' => $posts]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate(([
            'title' => 'required|string',
            'deskripsi' => 'required'
        ]));

        $posts = POST::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
        ]);

        if($posts) {
            return redirect()->route('post.tampil')->with('success', 'Berhasil disimpan');
        }
    }
}
