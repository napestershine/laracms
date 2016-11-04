@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <div class="row">
        <div class="col-sm-1">{{ $category->id }}</div>
        <div class="col-sm-4">{{ $category->name }}</div>
        <div class="col-sm-6">{{ $category->description }}</div>
        <div class="col-sm-1"><a href="/category/{{ $category->id }}/edit">Edit</a></div>

    </div>
@endsection