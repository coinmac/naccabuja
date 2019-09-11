@extends('master')
@section('content')

<p>
        <div class="jumbotron lead">
        <span class="h4">NACC-ABUJA EVENTS</span></div>
</p>

@foreach ($events as $event)
    

<div class="card">
        <div class="card-body">
            <h5 class="card-title"> {{ $event->title }} </h5>
            <hr>
            
            <p class="card-text"> {!!html_entity_decode($event->content)!!} </p>
        </div>
        @auth
        <div class="btn-group" role="group">
            <a href="{{route('posts.edit',$event->id)}}" class="btn btn-sm btn-info">Edit</a>
            <form onsubmit="return confirm('Are you sure you want to delete the post: {{$event->title}}?')" action="{{route('posts.destroy',$event->id)}}" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>  
        @endauth
    </div>

    @endforeach
@endsection

<style>
        p.card-text img{
            width: 100% !important; 
            height: auto;
        }
</style>