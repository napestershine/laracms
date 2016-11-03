@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <table class="table-bordered">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="/category/{{ $category->id }}">Show</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection