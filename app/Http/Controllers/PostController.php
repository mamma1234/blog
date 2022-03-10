<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;

class PostController extends Controller
{
    public function create()
    {
        $posts = Post::with(['tags'])->get();
        return view('posts.create', compact('posts'));
    }

    public function store(Request $request)
    {
        // dd($request->only(['title']));

        // dd($request->all());
        // $temp = $request->user()->posts();
        // dd($temp);
        $post = $request->user()->posts()->create($request->only(['title']));
        // dd($post);
        $tags = explode(',', $request->tags);
        $tags = array_map('trim', $tags);
        $tags = array_filter($tags, 'strlen');

        foreach($tags as $tag) {
            $tag = Tag::updateOrCreate([
                'name' => $tag
            ]);
            $post->tags()->attach($tag->id);

        }
        return redirect()->back();

    }
}
