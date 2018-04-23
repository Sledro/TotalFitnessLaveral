@extends('layouts.app')

@section('content')
<div class="card">
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['NewsfeedController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'bodyText']) }}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Update Post', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
</div>
@endsection
