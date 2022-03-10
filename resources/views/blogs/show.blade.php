@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Blog Show Page</h1>
                <p>Blog title: {{$blog->title}}</p>
                <p>Blog Description: {{$blog->description}}</p>
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="blog_id"  value={{$blog->id}}><br>
                    <input type="text" name="body" placeholder="write..."><br>
                    <button>save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
