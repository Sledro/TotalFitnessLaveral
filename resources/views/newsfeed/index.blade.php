@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card " style="padding:20px;">
                {!! Form::open(['action' => 'NewsfeedController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    <h4>Share photos, acheivements or simply whatever is on your mind:</h4>
                    {{ Form::textarea('body', '', ['class' => 'form-control', 'rows' => 2, 'placeholder' => 'What are you up too.....']) }}
                    {{Form::hidden('userid', Auth::user()->id)}}
                </div>
                <center>
                {{ Form::submit('Submit Post', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
                <center>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <!--Includes the layout feed that is also on the users profile!-->
        @include('layouts.feed') 
    </div>
@endsection
