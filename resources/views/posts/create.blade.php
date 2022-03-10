@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Create Posts Page</h1>
                @foreach($posts  as $post)
                <div class="mb-3">
                    <div>
                        Title: {{ $post->title }} <br>
                        Tags: @foreach($post->tags as $tag) {{ $tag->name }} @endforeach
                    </div>
                </div>
                @endforeach
                <div class="mb-5">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        Title: <input type="text" name="title" >
                        <br>
                        <br>
                        Tags: <input type="text" name="tags"><br>
                        <br>
                        <br>
                        <button>submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
