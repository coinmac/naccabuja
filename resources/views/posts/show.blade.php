@extends('master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title"> {{ $post->title }} </h5>
        <hr>
        
        <p class="card-text"> {!!html_entity_decode($post->content)!!} </p>
    </div>
    @auth
    <div class="btn-group" role="group">
        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-sm btn-info">Edit</a>
        <form onsubmit="return confirm('Are you sure you want to delete the post: {{$post->title}}?')" action="{{route('posts.destroy',$post->id)}}" method="post" class="d-inline-block">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </div>  
    @endauth
</div>
@stop

<style>
p.card-text img{
    width: 100% !important; 
    height: auto;
}
</style>