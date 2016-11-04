@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    <div class="row">
        <div class="col-sm-1">{{ $post->id }}</div>
        <div class="col-sm-4">{{ $post->name }}</div>
        <div class="col-sm-6">{{ $post->description }}</div>
        <div class="col-sm-1"><a href="/post/{{ $post->id }}/edit">Edit</a></div>

    </div>
@endsection