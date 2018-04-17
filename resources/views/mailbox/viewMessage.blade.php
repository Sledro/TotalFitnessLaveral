@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="card" style="padding:10px;">
          <h3 style="display: inline-block;margin-top:10px;">
              <center>View Message</center>
          </h3>

          <hr style="margin:10px;"></hr>


                  @foreach($mail as $pms)
                  {{$pms->message}}
                  @endforeach

    </div>         
</div>
@endsection
