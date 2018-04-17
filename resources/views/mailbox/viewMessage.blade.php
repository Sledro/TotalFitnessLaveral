@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="card" style="padding:10px;">
          <h3 style="display: inline-block;margin-top:10px;">
              <center>View Message</center>
          </h3>

          <hr style="margin:10px;"></hr>


                  @foreach($message as $pms)
                  
                    <div class="jumbotron" style="padding:10px;margin:10px;">
                        <div style="padding:15px;">
                        <a href="/user/{{$sender->name}}"><h4 style="display:inline;">{{$sender->name}}</h4></a> on {{$pms->created_at}}</a>
                         </div>
                        <div class="card" style="margin:0px;">
                        {{$pms->message}}
                        </div>
                    </div>
                  @endforeach
                  <div class="form-group">
                        {!! Form::open(['action' => ['MailboxController@reply'], 'method' => 'POST']) !!}
                        {{ Form::textarea('reply', '', ['class' => 'form-control', 'placeholder' => 'Put your message here....', 'style' => 'margin:20px;width:97%;']) }}
                        {{ Form::hidden('id', $mail->id) }}
                        {{ Form::hidden('senderID', Auth::user()->id) }}
                        <?php if($mail->senderID == Auth::user()->id){
                            $receiverID = $mail->receiverID;
                        }else{
                            $receiverID = $mail->senderID;
                        }?>
                        {{ Form::hidden('receiverID', $receiverID) }}
                        {{ Form::hidden('_method', 'PUT') }}
                        <center>{{ Form::submit('Send Reply', ['class' => 'btn btn-primary', 'style' => 'margin:0px auto;']) }}<center>
                        {!! Form::close() !!}
                </div>
    </div>         
</div>
@endsection
