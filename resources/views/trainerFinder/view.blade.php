@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="card" style="padding:10px;">
          <h3 style="display: inline-block;margin-top:10px;">
              <center>Trainer Finder</center>
          </h3>

          <hr style="margin:10px;"></hr>
          {!! Form::open(['action' => ['TrainerFinderController@request'], 'method' => 'POST']) !!}
            <table class="table table-hover" style="margin:0px auto;">
                <thead >
                  <tr>
                    <th scope="col">Client ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Request</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($trainers as $trainer)
                  
                  <tr>
                    <th scope="row">{{$trainer->id}}</th>
                    <td>{{$trainer->name}}</td>
                    <td><a href="./user/{{$trainer->username}}">{{$trainer->username}}</a></td>
                    <td>{{$trainer->email}}</td>
                    {{ Form::hidden('trainerID', $trainer->id) }}
                    <td>{{ Form::submit('Request Trainer', ['class' => 'btn btn-primary']) }}</td>
                  </tr>
                  
                  @endforeach
                </tbody>
            </table>

            {{ Form::hidden('clientID', Auth::user()->id) }}
            {{ Form::hidden('_method', 'POST') }}
        </center>
    {!! Form::close() !!}
    </div>         
</div>
@endsection
