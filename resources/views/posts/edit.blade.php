@extends('master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title"> Update Post </h5>
        <hr>
        @if ($errors->all())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)

                <li>{{$error}}</li>
                    
                @endforeach
                
            </div>            
        @endif

        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{session()->get('message')}}
            </div>            
        @endif
        <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="my-input">Title</label>
            <input id="title" name="title" class="form-control" type="text" value="{{$post->title}}">
            </div>
            <div class="form-group">
                    <label for="featured">Upload Image</label>
                <input id="featured" name="featured" class="form-control" type="file">
            <input id="featuredold" type="hidden" value="{{$post->featured}}">
            </div>

            <div class="form-group">
                        <label for="my-input">Category</label>
                    <select name="category" class="form-control">
                        <option value="News">News</option>
                        <option value="Events">Events</option>
                    <option value="{{$post->category}}" selected>{{$post->category}}</option>
                    </select>
            </div>

            <div class="form-group">
                <label for="my-input">Content</label>
            <textarea id="content" class="form-control" name="content" rows="10">{{$post->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-outline-primary float-right">Update Post</button>
        </form>
    </div>
</div>
@stop