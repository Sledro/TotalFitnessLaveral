@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="card" style="padding:10px;">
          <h3 style="display: inline-block;margin-top:10px;">
              <center>View Message</center>
          </h3>

          <hr style="margin:10px;"></hr>


                  @foreach($message as $pms)
                  
                    <div class="jumbotron" style="padding:10px;">
                    {{$pms->senderID}}
                     {{$pms->message}}
                    </div>
                  @endforeach
                  <div class="form-group">
                        {!! Form::open(['action' => ['MailboxController@reply'], 'method' => 'POST']) !!}
                        {{ Form::label('reply', 'Reply') }}
                        {{ Form::textarea('reply', '', ['class' => 'form-control', 'placeholder' => 'bodyText']) }}
                        {{ Form::hidden('id', $mail->id) }}
                        {{ Form::hidden('senderID', Auth::user()->id) }}
                        <?php if($mail->senderID == Auth::user()->id){
                            $receiverID = $mail->receiverID;
                        }else{
                            $receiverID = $mail->senderID;
                        }?>
                        {{ Form::hidden('receiverID', $receiverID) }}
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ Form::submit('Send Reply', ['class' => 'btn btn-primary']) }}
                        {!! Form::close() !!}
                </div>
    </div>         
</div>
@endsection
