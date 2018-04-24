@extends('layouts.app')

@section('content')

<div class="container-fluid" style="padding:0px 0px 0px 0px;">
        <div class="card" style="padding:10px;">
          <h3 style="display: inline-block;margin-top:10px;">
              <center>Exercises</center>
          </h3>

          <hr style="margin:10px;"></hr>

            <table class="table table-hover" style="margin:0px auto;">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th class="content-to-hide" scope="col">Body Part</th>
                    <th scope="col">Muscle</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if($exercises->isEmpty())
                  <tr><td colspan="5">You have not yet sent or receive and direct mails. You can send a user a direct mail by clicking on "Private Messafe" on their user profile.</td></tr>
                  @endif
                  @foreach($exercises as $exercise)
                  <tr>
                    <td><a href="./exercise/{{$exercise->id}}">{{$exercise->name}}</a></td>
                    <td class="content-to-hide">{{$exercise->bodyPart}}</td>
                    <td>{{$exercise->muscle}}</td>
                    <td style="width:150px;"><a href="./exercise/{{$exercise->id}}" class="btn btn-primary" >View</a></td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
    </div>         
</div>
@endsection
