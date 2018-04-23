@extends('layouts.app')

@section('content')

<div class="container-fluid" style="padding:0px 0px 0px 0px;">
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
                  @if($clients->isEmpty())
                  <tr><td colspan="5">You do not have any clients yet. If a TF User wishes to become your cleint, they will need to send you a client request. You then need to accep that client request. </td></tr>
                  @endif
                  @foreach($clients as $client)
                  <tr>
                    {!! Form::open(['action' => ['ClientManagerController@updatePlan'], 'method' => 'POST']) !!}
                    <th scope="row">{{$client->id}}</th>
                    <td>{{$client->name}}</td>
                    <td>{{$client->username}}</td>
                    <td>{{$client->email}}</td>
                    <td> {{ Form::select('plansList', $plansList, $client->plan['exercisePlanID']) }} <br/></td>
                    {{ Form::hidden('clientID', $client->id) }}
                    <td>{{ Form::submit('Update Plan', ['class' => 'btn btn-primary']) }}</td>
                    {{ Form::hidden('_method', 'PUT') }}
                    {!! Form::close() !!}
                    <td style="width:150px;">
                    {!!Form::open(['action' => ['ClientManagerController@remove'], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::hidden('clientID', $client->id)}}
                    {{Form::submit('Remove as Client', ['class' => 'btn btn-danger btn-sm'])}}
                    {!!Form::close()!!}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
    </div>         
</div>
@endsection
