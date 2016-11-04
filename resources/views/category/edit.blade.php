@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Edit a category :: {{ $category->name }}</h1>
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
            {!! Form::open(['url'=>url('/category/'.$category->id), 'method'=>'patch']) !!}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                           value="@if(isset($category->name) && $category->name!=null){{ $category->name }}@endif">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description"
                              placeholder="description">@if(isset($category->description) && $category->description!=null){{ $category->description }}@endif</textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            {!! Form::close() !!}
        </div>
        <div class="row">
            {!! Form::open(['url'=>url('/category/'.$category->id), 'method'=>'DELETE']) !!}
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection