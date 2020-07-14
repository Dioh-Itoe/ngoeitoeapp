@extends ('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary" style="margin:5px 0px 0px 5px">Go Back</a>
    <h1 style="letter-spacing: 0px">{{$post->title}}</h1>
    <img src="/storage/cover_image/{{$post->cover_image}}" style="width: 100%; height: 630px" alt="IMAGE">
    
    <div style="margin:5px">
        <div>
            <p>{!!$post->body!!}</p>
        </div>
        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        
        @if (!Auth::guest())
            @if(Auth::user()->id === $post->user_id)
            <hr>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
    </div>
    
    @endsection