<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::all();

        return view('post.index', ['posts' => $data, "pageTitle" => "Blog"]);
    }

    public function show($id)
    {
        $post = Post::find($id);

        // handle null -> message

        return view('post.show', ['post' => $post, "pageTitle" => $post->title]);
    }

    public function create()
    {
        $post = Post::create([
            'title' => 'My find unique post',
            'body' => 'This is to test find',
            'author' => 'Ahmed',
            'published' => true
        ]);

        return redirect('/blog');
    }

    public function delete()
    {
        Post::destroy(3);
    }
}
