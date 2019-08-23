@extends('layouts.app') 
@section('content')


<div class="container-fluid">
    <h1>{{$category->name}}</h1>
    <div class="btn-group">
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm btn-margin-right">Edit</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
            {{method_field('delete')}}

            <button class="btn btn-danger btn-sm pull-left btn-margin-right" type="submit">Delete</button> {{csrf_field()}}
        </form>
    </div>
</div>
@endsection