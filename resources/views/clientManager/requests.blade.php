@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="card" style="padding:10px;">
          <h3 style="display: inline-block;margin-top:10px;">
              <center>Client Requests</center>
          </h3>
          {!! Form::open(['action' => ['ClientManagerController@accept'], 'method' => 'POST']) !!}
          <hr style="margin:10px;"></hr>

            <table class="table table-hover" style="margin:0px auto;">
                <thead >
                  <tr>
                    <th scope="col">Request ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($requests as $request)
                  <tr>
                    <th scope="row">{{$request->id}}</th>
                    <td><a href="/user/{{$request->client['username']}}">{{$request->clientID}}</a></td>
                    <td><a href="/user/{{$request->client['username']}}">{{$request->client['username']}}</a></td>
                    <td>{{ Form::submit('Accept Client', ['class' => 'btn btn-primary']) }}</td>
                  </tr>
                  {{ Form::hidden('requestID', $request->id) }}
                  {{ Form::hidden('clientID', $request->clientID) }}
                  {{ Form::hidden('trainerID', $request->trainerID) }}
                  @endforeach
                </tbody>
            </table>
            {{ Form::hidden('_method', 'PUT') }}

    {!! Form::close() !!}
    </div>         
</div>
@endsection
