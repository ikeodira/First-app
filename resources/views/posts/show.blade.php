@extends('layouts.app')

@section('content')
   <a href="/my-first-app/public/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div class="row">
        <div class="col-md-12">
            <img class="rounded img-thumbnail w-40 h-50"  src="{{asset('/storage/cover_images/'.$post->cover_image)}}" alt="No Image"/>
        </div>
    </div>
    <p>{{$post->body}}</p>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/my-first-app/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ]) }}
            {{ Form::hidden('_method', 'DELETE')}}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {{ Form::close() }}
        @endif
    @endif
@endsection
