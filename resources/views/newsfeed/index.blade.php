@extends('layouts.app')

@section('content')




    <div class="col-md-6">
        <div class="card " style="padding:20px;">
        {!! Form::open(['action' => 'NewsfeedController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <h4>Share quotes, acheivements or simply whatever is on your mind:</h4>
            {{ Form::textarea('body', '', ['class' => 'form-control', 'rows' => 2, 'placeholder' => 'What are you up too.....']) }}
            {{Form::hidden('userid', Auth::user()->id)}}
        </div>
        <center>
        {{ Form::submit('Submit Post', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
        <center>
        
        </div>
  




  
        <!--Includes the layout feed that is also on the users profile!-->
        @include('layouts.feed') 
    </div>
    <div class="col-md-6 pull-right">
            <div class="card " style="padding:20px;">
                    <img src="{{ asset('img/sponsors.png') }}"/>
        </div>
    </div>

@endsection
