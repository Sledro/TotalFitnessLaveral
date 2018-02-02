@extends('layouts.app')

@section('content')
    <h1>This is the posts page</h1>
    <p>Thanks for viewing my posts page.</p>
    @if(count($posts) > 1)  
        @foreach($posts as $post)
            <div class="well">
                <h3>{{$post->title}}</h3>
                <small>Written on: {{$post->created_at}}</small>
                <small><a href="/posts/{{$post->id}}/edit">Edit</a></small>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>
        @endforeach
    @else
        No posts.
    @endif
@endsection
