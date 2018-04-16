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
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Exercise Plan Name E.g Advanced Bulking']) }}
    </div>
    <div class="form-group">
        {{ Form::label('plan', 'Calender Plan') }}</br>
        <div class="col-md-2" style="padding:0px 10px 0px 0px;flex:0%;">
            <div class="cardDay" style="padding:10px;background-color:#c7e0fc;">
               
                <h3 style="margin-bottom:3px;">
                    <center>Monday</center>
                    <hr style="margin:10px;"></hr>
                </h3>
                <input class="btn btn-primary" onclick="changeVal('val1')" style="font-family:Helvetica;padding:10px;margin:5px 0px 5px 0px;width:100%;" name="queue" value="Add Exercise">
                    <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" href="#collapse1001">New Exercise</a>
                            </h4>
                          </div>
                          <div id="collapse1001" class="panel-collapse collapse in">
                                <div class="panel-body">
                                      
                                    <div class="form-group">    
                                        {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                        {{ Form::select('exerciseList[1][]', $exerciseList) }} <br/>
                                    </div>
                                    <div class="form-group">    
                                            {{ Form::label('description', 'Exercise Description') }} <br/>
                                            <a class="card-link"  href="./exercise/">Exercise Details</a><br/>
                                    </div>
                                    <div class="form-group">    
                                            {{ Form::label('reps', 'Number of Reps') }} <br/>
                                            {{ Form::text('reps[1][]', "") }} <br/>
                                    </div>
                                    <div class="form-group">    
                                            {{ Form::label('sets', 'Number of Sets') }} <br/>
                                            {{ Form::text('sets[1][]', '') }} <br/>
                                    </div>
                                    <div class="form-group">    
                                            {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                            {{ Form::text('weight[1][]', '') }} <br/>
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
    
        
        <script>
    var value = "";
 
    function changeVal(choice) {
        if (choice == 'val1') {
            value = '1';
        } else if (choice == 'val2'){
            value ='2';
        } else if (choice == 'val3'){
            value ='3';
        } else if (choice == 'val4'){
            value ='4';
        } else if (choice == 'val5'){
            value ='5';
        } else if (choice == 'val6'){
            value ='6';
        } else if (choice == 'val7'){
            value ='7';
        }
     
    }
    
    function rand(){
        return Math.floor((Math.random() * 1000) + 1);
    }

           
            $('input[name="queue"]').click(function(){
                var a=rand();
                $("<div class='panel-group'>"+
                    "<div class='panel panel-default'>"+
                        "<div class='panel-heading'>"+
                            "<h4 class='panel-title'>"+
                                "<a data-toggle='collapse' href='#collapse"+a+"'>New Exercise</a></h4>"+
                        "</div>"+
                    "<div id='collapse"+a+"' class='panel-collapse collapse'>"+
                    "<div class='panel-body' style='padding:10px;'>"+
                                    "<div class='form-group'>"+
                                            "<label for='description'>Exrcise Description</label><br/>"+
                                            "<select name='exerciseList["+value+"][]'>"+
                                            <?php foreach ($exerciseList as $key => $item){ ?>
                                                "<option value='<?php echo $key; ?>'><?php echo $item; ?></option>"+
                                            <?php  } ?>
                                            "</select>"+
                                    "</div>"+
                                    "<div class='form-group'>"+
                                            "<label for='description'>Exrcise Description</label><br/>"+
                                           " <a class='card-link'  href='./exercise/'>Exercise Details</a><br/>"+
                                           "</div>"+
                                    "<div class='form-group'>"+ 
                                            "<label for='reps[]'>Number of Reps</label><br/>"+
                                            "<input type='text' name='reps["+value+"][]'> <br/>"+
                                            "</div>"+
                                    "<div class='form-group'>"+  
                                            "<label for='sets[]'>Number of Sets</label><br/>"+
                                            "<input type='text' name='sets["+value+"][]'> <br/>"+
                                    "</div>"+
                                    "<div class='form-group'>"+ 
                                            "<label for='weight[]'>Weight (kg)</label><br/>"+
                                            "<input type='text' name='weight["+value+"][]'> <br/>"+
                                            "</div></div></div></div>").appendTo('.cardDay');
            })
        </script>
@endsection
