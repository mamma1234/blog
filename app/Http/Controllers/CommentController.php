<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create([
            'user_id' => $request->user()->id,
            'blog_id' => $request->blog_id,
            'body' => $request->body,
        ]);

        return redirect()->back();
    }

    public function index()
    {
        // $comments = Comment::all();
        $comments = Comment::with('blog')->get();
        return view('comments.index', compact('comments'));
    }
}
