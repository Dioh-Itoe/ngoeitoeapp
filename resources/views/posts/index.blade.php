@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="letter-spacing: 0px">Post</h1>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="/storage/cover_image/{{$post->cover_image}}" style="width: 100%" alt="IMAGE">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

                        </div>
                    </div>
                </div>
            @endforeach
        {{$posts->links()}}    
        @else 
            <p>No posts found</p>    
        @endif
    </div>   
    
@endsection