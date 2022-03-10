<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        // return $request->all();
        // dd($request->all());

        // case 1
        // $blog = new Blog();
        // $blog->user_id = $request->user()->id;
        // $blog->title = $request->title;
        // $blog->description = $request->description;
        // $blog->save();

        // case 2
        Blog::create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->back();
    }
}
