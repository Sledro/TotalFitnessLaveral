@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="card" style="padding:10px;">
          <h3 style="display: inline-block;margin-top:10px;">
              <center>Client Manager</center>
          </h3>

          <hr style="margin:10px;"></hr>

            <table class="table table-hover" style="margin:0px auto;">
                <thead >
                  <tr>
                    <th scope="col">Mail ID</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Title</th>
                    <th scope="col">Received On</th>
                    <th scope="col">View</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($mail as $pms)
                  <tr>
                    <th scope="row">{{$pms->id}}</th>
                    <td>{{$pms->sender->first()->name}}</td>
                    <td>{{$pms->receiver->first()->name}}</td>
                    <td>{{$pms->title}}</td>
                    <td>{{$pms->created_at}}</td>
                    <td style="width:150px;"><a href="./mailbox/view/{{$pms->id}}" class="btn btn-primary" >View</a></td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
    </div>         
</div>
@endsection
