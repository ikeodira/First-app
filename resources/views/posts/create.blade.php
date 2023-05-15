@extends('layouts.app')
{{-- Laravel Collective --}}
@section('content')
    <h1>Create Post</h1>
    {{ Form::open(['route' => 'posts.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    <div class="form-group">
        {{Form::label('title', "Title")}}
        {{Form::text('title','', ['class' => 'form-control mb-2', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', "Body")}}
        {{Form::textarea('body','', ['class' => 'form-control mb-2', 'placeholder' => 'Body'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary mt-4'])}}
    {{ Form::close() }}

@endsection
