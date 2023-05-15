@extends('layouts.app')

@section('content')

    <h1>Posts</h1>
    @if(count($posts)>0)
    <div class="card">
        <ul class="list-group list-group-flush">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-md-4">
                    <img class="rounded img-thumbnail w-100 mh-50"  src="{{asset('/storage/cover_images/'.$post->cover_image)}}" alt="No Image"/>
                 </div>
                <div class="col-md-8">
                        <h3><a href="/my-first-app/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}}</small>
                </div>
            </div>

    </div>
        @endforeach
        </ul>

    @else

    @endif
@endsection
