<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $data = Tag::all();

        return view('tag.index', ['tags' => $data, "pageTitle" => "Tags Page"]);
    }

    public function create()
    {
        Tag::create([
            'title' => 'CSS',
        ]);

        return redirect('/tags');
    }

    public function testManyToMany(): JsonResponse
    {
        // $post1 = Post::find(1);
        // $post4 = Post::find(4);

        // $post1->tags()->attach([1, 2]);
        // $post4->tags()->attach([1]);

        // return response()->json([
        //     'post1' => $post1->tags,
        //     'post4' => $post4->tags,
        // ]);

        $tag = Tag::find(2);

        $tag->posts()->attach([3]);

        return response()->json([
            'tag' => $tag->title,
            'posts' => $tag->posts,
        ]);
    }
}
