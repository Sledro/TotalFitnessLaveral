@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="card" style="padding:10px;">
          <h3 style="display: inline-block;margin-top:10px;">
              <center>Client Manager
                  <a href="./client-manager/requests" class="btn btn-success" style="float:right;align:right;margin-right:10px;width:200px;">View Requests</a>
                  </center>
          </h3>

          

          <hr style="margin:10px;"></hr>

            <table class="table table-hover" style="margin:0px auto;">
                <thead >
                  <tr>
                    <th scope="col">Client ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($clients as $client)
                  <tr>
                    {!! Form::open(['action' => ['ClientManagerController@updatePlan'], 'method' => 'POST']) !!}
                    <th scope="row">{{$client->id}}</th>
                    <td>{{$client->name}}</td>
                    <td>{{$client->username}}</td>
                    <td>{{$client->email}}</td>
                    <td> {{ Form::select('plansList', $plansList) }} <br/></td>
                    {{ Form::hidden('clientID', $client->id) }}
                    <td>{{ Form::submit('Update Plan', ['class' => 'btn btn-primary']) }}</td>
                    {{ Form::hidden('_method', 'PUT') }}
                    {!! Form::close() !!}
                    <td style="width:150px;"><a href="./exercise-plan-manager/edit/{{$client->id}}" class="btn btn-danger" >Remove as Client</a></td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
    </div>         
</div>
@endsection
