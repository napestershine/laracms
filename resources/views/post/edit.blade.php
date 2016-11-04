@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Edit a Post :: {{ $post->title }}</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops! Something went wrong!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(['url'=>url('/post/'.$post->id), 'method'=>'patch']) !!}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                           value="@if(isset($post->title) && $post->title!=null){{ $post->title }}@endif">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description"
                              placeholder="description">@if(isset($post->description) && $post->description!=null){{ $post->description }}@endif</textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            {!! Form::close() !!}
        </div>
        <div class="row">
            {!! Form::open(['url'=>url('/post/'.$post->id), 'method'=>'DELETE']) !!}
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection