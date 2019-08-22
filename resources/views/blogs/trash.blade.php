@extends('layouts.app') 
@section('content')


<div class="container-fluid">
    <div class="jumbotron">
        <h1>Trashed Blogs</h1>
    </div>
</div>

<div class="col-md-12">

    @foreach ($trashedBlogs as $tBlog )
    <h2>
        {{ $tBlog->title }}
    </h2>
    <p>{{$tBlog->body}}</p>

    <div class="btn-group">
        {{-- Restore Blog Form --}}
        <form method="GET" action="{{ route('blogs.restore', $tBlog->id) }}">
            <button class="btn btn-success btn-xs pull-left btn-margin-right" type="submit">Restore</button> {{ csrf_field()
            }}
        </form>
        {{-- Delete Permanently Form --}}
        <form method="POST" action="{{ route('blogs.permanent-delete', $tBlog->id) }}">
            {{ method_field('delete') }}
            <button class="btn btn-danger btn-xs pull-left btn-margin-right" type="submit">Permanent Delete</button> {{ csrf_field()
            }}
        </form>
    </div>
    @endforeach

</div>
@endsection