@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <a href="/post/create" class="btn btn-primary">Add </a>
    <table class="table-bordered">
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>
                    <a href="/post/{{ $post->id }}">Show</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection