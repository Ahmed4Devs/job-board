<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::paginate(10);

        return view('post.index', ['posts' => $data, "pageTitle" => "Blog"]);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('post.show', ['post' => $post, "pageTitle" => $post->title]);
    }

    public function create()
    {
        Post::factory(10)->create();

        return response("Created successfully!", 201);
    }

    public function delete($id)
    {
        Post::destroy($id);

        return response("Successfully Deleted", 204);
    }
}
