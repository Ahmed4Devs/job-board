<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $data = Comment::all();

        return view('comment.index', ['comments' => $data, "pageTitle" => "Blog"]);
    }


    public function create()
    {
        // Comment::create([
        //     'author' => 'Ahmed',
        //     'content' => 'This is another test comment',
        //     'post_id' => 3
        // ]);

        Comment::factory(5)->create();

        return redirect('/comments');
    }
}
