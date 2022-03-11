@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Comments</h1>
            @foreach ($comments as $comment)
                <p>Comment: {{ $comment->body }}</p>
                <p>Blog Title: {{ $comment->blog->title }}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection

