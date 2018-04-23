@extends('layouts.app')

@section('content')

<div class="container-fluid" style="padding:0px 0px 0px 0px;">
        <div class="card" style="padding:10px;">
          <h3 style="display: inline-block;margin-top:10px;">
              <center>Update Training Plan
              <a href="./exercise-plan-manager/create" class="btn btn-success" style="float:right;align:right;margin-right:10px;width:200px;">New Exercise Plan</a>
              </center>
          </h3>

          <hr style="margin:10px;"></hr>

            <table class="table table-hover" style="margin:0px auto;">
                <thead >
                  <tr>
                    <th scope="col">Plan ID</th>
                    <th scope="col">Name</th>
                    <th scope="col"># Active Clients</th>
                    <th scope="col">Created On</th>
                    <th scope="col">Manage</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @if($plans->isEmpty())
                  <tr><td colspan="5">You have not yet preated a trining plan. Please create one.</td></tr>
                  @endif
                  @foreach($plans as $plan)
                  <tr>
                    <th scope="row">{{$plan->id}}</th>
                    <td>{{$plan->name}}</td>
                    <td>55</td>
                    <td>{{$plan->created_at}}</td>
                    <td><a href="./exercise-plan-manager/edit/{{$plan->id}}" class="btn btn-primary" >Manage</a></td>
                    <td style="width:150px;"><a href="./exercise-plan-manager/edit/{{$plan->id}}" class="btn btn-danger" >Delete (Cannot be undone)</a></td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
    </div>         
</div>
@endsection
