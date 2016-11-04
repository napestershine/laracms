@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Create a category</h1>
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
            {!! Form::open(['url'=>url('category/store'), 'method'=>'post']) !!}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"
                          placeholder="description"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection