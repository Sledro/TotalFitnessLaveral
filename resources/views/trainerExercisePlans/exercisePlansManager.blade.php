@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="card">
        <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Plan ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$plan->id}}</td>
                    <td>11:11 23/03/33</td>
                    <td><a href="#" class="btn btn-primary" style="float:left;margin-right:10px;">Manage</a></td>
                  </tr>
                </tbody>
              </table>
    </div>         
</div>
@endsection
