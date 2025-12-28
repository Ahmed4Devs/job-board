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

        Comment::factory(5)->create();

        return response(["message" => "Created successfully!", "createdCount" => 5], 201);
    }
}
