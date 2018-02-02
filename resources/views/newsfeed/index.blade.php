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
                            <h4 class="card-title">Dan Hayden</h4>
                            <p class="card-category">{{$post->body}}</p>
                        </div>
                        <div class="card-body ">
                            <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                        </div>
                        <div class="card-footer ">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> Written on: {{$post->created_at}}
                                <i class="fa fa-circle text-danger"></i> <a href="/newsfeed/{{$post->id}}/edit">Edit</a>
                                <i class="fa fa-circle text-warning"></i> 
                                {!!Form::open(['action' => ['NewsfeedController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
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
