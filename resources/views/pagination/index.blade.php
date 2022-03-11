@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>pagination</h1>
            @foreach ($users as $user)
                <p>name: {{ $user->name }}</p>
            @endforeach
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection

