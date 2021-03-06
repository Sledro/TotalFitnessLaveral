@extends('layouts.app')

@section('content')

<div class="container-fluid" style="padding:0px 0px 0px 0px;">
        <div class="card" style="padding:10px;">
          <h3 style="display: inline-block;margin-top:10px;">
              <center>Create Message</center>
          </h3>
          <?
          if(!isset($id)){$id=1;}
          ?>
          <hr style="margin:10px;"></hr>
                  <div class="form-group">
                        {!! Form::open(['action' => ['MailboxController@storeNow'], 'method' => 'POST']) !!}
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', '', ['class' => 'form-control']) }}
                        {{ Form::label('message', 'message') }}
                        {{ Form::textarea('message', '', ['class' => 'form-control']) }}
                        {{ Form::hidden('receiverID', $id) }}
                        {{ Form::hidden('_method', 'PUT') }}<br>
                        {{ Form::submit('Send Message', ['class' => 'btn btn-primary']) }}
                        {!! Form::close() !!}
                </div>
    </div>         
</div>
@endsection
