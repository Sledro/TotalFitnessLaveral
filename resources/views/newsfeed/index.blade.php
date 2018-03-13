@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card " style="padding:20px;">
                {!! Form::open(['action' => 'NewsfeedController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                        {{ Form::label('body', 'Body') }}
                        {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'What are you up too.....']) }}
                </div>
                <center>
                {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
                <center>
                </div>
            </div>
        </div>
    </div>
    @if(count($posts) > 1)  
        @foreach($posts as $post)
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Dan Hayden says:</h4>
                        </div>
                        <div class="card-body ">
                            <h1 class="card-title">{{$post->body}}</h1>
                        </div>
                        <div class="card-footer ">
 
                            <hr>
                            <div class="stats">
                             
                                <div class="legend">
                                    <i class="fa fa-clock-o"></i>  Written on: {{$post->created_at}}
                                    <a href="/newsfeed/{{$post->id}}/edit">
                                    <button type="button" class="btn btn-default btn-sm">
                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                      </button>
                                    </a>
                                    {!!Form::open(['action' => ['NewsfeedController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-default btn-sm'])}}
                                    {!!Form::close()!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
        No posts.
    @endif
@endsection
