@extends('layouts.app')

@section('content')

<div class="card" style="padding:10px;">
        {!! Form::open(['action' => ['ExercisePlansController@store'], 'method' => 'POST']) !!}
        <center><h3 style="margin-top:10px;margin-bottom:20px;">Create Training Plan
                {{ Form::submit('Create this Plan', ['class' => 'btn btn-success', 'style' => 'float:right;align:right;margin-right:10px;']) }}
                </h3></center>
    <hr style="margin:10px;"></hr>
  

    <div class="form-group">
            {{ Form::label('title', 'Name') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'title']) }}
    </div>
    <div class="form-group">
        {{ Form::label('plan', 'Calender Plan') }}
        <div class="col-md-2" style="padding:0px 10px 0px 0px;flex:0%;">
            <div class="card" style="padding:10px;background-color:#c7e0fc;">
                <h3 style="margin-bottom:3px;">
                    <center>Monday</center>
                    <hr style="margin:10px;"></hr>
                </h3>

    
        <div class="col-md-2" style="padding:0px;flex:0%;">
                <div class="card" style="padding:10px;background-color:#c7e0fc;">
                    <h3 style="margin-bottom:3px;">
                        <center>Monday</center>
                        <hr style="margin:10px;"></hr>
                    </h3>
        

                            <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse">
                                            <!--Iterate through exercises in user plans for Monday!-->  
         
                                        </h4>
                                    </div>
                                    <div id="collapse" class="collapse">
                                        <div class="panel-body">
                                            <div class="card" style="padding:10px;"> 
                                                <div class="form-group">    
                                                    {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                    {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('description', 'Exercise Description') }} <br/>
                                                        <a class="card-link"  href="./exercise/">Exercise Details</a><br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                        {{ Form::text('reps', '') }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                        {{ Form::text('sets', '') }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                        {{ Form::text('weight', '') }} <br/>
                                                </div>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
            <center>
            {{ Form::hidden('_method', 'PUT') }}

            </center>
        {!! Form::close() !!}
        
   
@endsection
