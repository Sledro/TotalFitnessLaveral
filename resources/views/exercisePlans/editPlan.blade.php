@extends('layouts.app')

@section('content')
<div class="card2" style="padding:10px;">
        <center><h3 style="margin-top:10px;margin-bottom:20px;">Edit Training Plan
                {!! Form::open(['action' => ['ExercisePlansController@delete'], 'method' => 'POST']) !!}
                {{ Form::submit('Delete Plan', ['class' => 'btn btn-danger', 'style' => 'float:right;align:right;margin-right:10px;']) }}
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::hidden('planID', $plan->id) }}
                {!! Form::close() !!}


                {!! Form::open(['action' => ['ExercisePlansController@update', $plan->id], 'method' => 'POST']) !!}
                {{ Form::submit('Update Plan', ['class' => 'btn btn-primary', 'style' => 'float:right;align:right;margin-right:10px;']) }}
                
                </h3></center>
    <hr style="margin:10px;"></hr>

    {!! Form::open(['action' => ['ExercisePlansController@update', $plan->id], 'method' => 'POST']) !!}
    <div class="form-group">
            {{ Form::label('title', 'Name') }}
            {{ Form::text('title', $plan->name, ['class' => 'form-control', 'placeholder' => 'title']) }}
    </div>
    
        {{ Form::label('plan', 'Calender Plan') }}<br/>
        <div class="col-md-2 mobileMax" style="display:inline-block;padding:0px 10px 0px 0px;flex:0%;width:14.22%;">
            <div class="card2" style="padding:10px;background-color:#c7e0fc;width:100%;">
                <h3 style="margin-bottom:3px;">
                    <center>Monday</center>
                    <hr style="margin:10px;"></hr>
                </h3>

                <!--Iterate through exercises in the plan!-->  
                @foreach($plan->exercises as $exercise)
                    @if($exercise->day=="Monday")
                        <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <?$ran=rand(10,10000)?>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$ran}}">
                                        <!--Iterate through exercises in user plans for Monday!-->  
                                        @foreach($exercise->exercise as $exercises)
                                            {{$exercises->name}}</a>
                                        @endforeach
                                    </h4>
                                </div>
                                <div id="collapse{{$ran}}" class="collapse">
                                    <div class="panel-body">
                                      
                                            <div class="form-group">    
                                                {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('description', 'Exercise Description') }} <br/>
                                                    <a href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                    {{ Form::text('reps', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                    {{ Form::text('sets', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                    {{ Form::text('weight', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                            </div>     
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    
   


        <div class="col-md-2 mobileMax" style="display:inline-block;padding:0px 10px 0px 0px;flex:0%;width:14.22%;">
                <div class="card2" style="padding:10px;background-color:#c7e0fc;width:100%;">
                    <h3 style="margin-bottom:3px;">
                        <center>Tuesday</center>
                        <hr style="margin:10px;"></hr>
                    </h3>
    
                    <!--Iterate through exercises in the plan!-->  
                    @foreach($plan->exercises as $exercise)
                        @if($exercise->day=="Tuesday")
                            <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <?$ran=rand(10,10000)?>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$ran}}">
                                            <!--Iterate through exercises in user plans for Tuesday!-->  
                                            @foreach($exercise->exercise as $exercises)
                                                {{$exercises->name}}</a>
                                            @endforeach
                                        </h4>
                                    </div>
                                    <div id="collapse{{$ran}}" class="collapse">
                                        <div class="panel-body">
                                          
                                                <div class="form-group">    
                                                    {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                    {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('description', 'Exercise Description') }} <br/>
                                                        <a href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                        {{ Form::text('reps', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                        {{ Form::text('sets', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                        {{ Form::text('weight', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                </div>     
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>




            <div class="col-md-2 mobileMax" style="padding:0px 10px 0px 0px;flex:0%;width:14.22%;">
                    <div class="card2" style="padding:10px;background-color:#c7e0fc;width:100%;">
                        <h3 style="margin-bottom:3px;">
                            <center>Wednesday</center>
                            <hr style="margin:10px;"></hr>
                        </h3>
        
                        <!--Iterate through exercises in the plan!-->  
                        @foreach($plan->exercises as $exercise)
                            @if($exercise->day=="Wednesday")
                                <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <?$ran=rand(10,10000)?>
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$ran}}">
                                                <!--Iterate through exercises in user plans for Wednesday!-->  
                                                @foreach($exercise->exercise as $exercises)
                                                    {{$exercises->name}}</a>
                                                @endforeach
                                            </h4>
                                        </div>
                                        <div id="collapse{{$ran}}" class="collapse">
                                            <div class="panel-body">
                                              
                                                    <div class="form-group">    
                                                        {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                        {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('description', 'Exercise Description') }} <br/>
                                                            <a href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                            {{ Form::text('reps', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                            {{ Form::text('sets', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                            {{ Form::text('weight', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                    </div>     
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>




                <div class="col-md-2 mobileMax" style="padding:0px 10px 0px 0px;flex:0%;width:14.22%;">
                        <div class="card2" style="padding:10px;background-color:#c7e0fc;width:100%;">
                            <h3 style="margin-bottom:3px;">
                                <center>Thursday</center>
                                <hr style="margin:10px;"></hr>
                            </h3>
            
                            <!--Iterate through exercises in the plan!-->  
                            @foreach($plan->exercises as $exercise)
                                @if($exercise->day=="Thursday")
                                    <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <?$ran=rand(10,10000)?>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$ran}}">
                                                    <!--Iterate through exercises in user plans for Thursday!-->  
                                                    @foreach($exercise->exercise as $exercises)
                                                        {{$exercises->name}}</a>
                                                    @endforeach
                                                </h4>
                                            </div>
                                            <div id="collapse{{$ran}}" class="collapse">
                                                <div class="panel-body">
                                                  
                                                        <div class="form-group">    
                                                            {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                            {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                <a class="card2-link"  href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                                {{ Form::text('reps', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                                {{ Form::text('sets', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                                {{ Form::text('weight', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                        </div>     
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>


                    <div class="col-md-2 mobileMax" style="padding:0px 10px 0px 0px;flex:0%;width:14.22%;">
                            <div class="card2" style="padding:10px;background-color:#c7e0fc;width:100%;">
                                <h3 style="margin-bottom:3px;">
                                    <center>Friday</center>
                                    <hr style="margin:10px;"></hr>
                                </h3>
                
                                <!--Iterate through exercises in the plan!-->  
                                @foreach($plan->exercises as $exercise)
                                    @if($exercise->day=="Friday")
                                        <div class="panel-group" id="accordion">
                                                <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <?$ran=rand(10,10000)?>
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$ran}}">
                                                        <!--Iterate through exercises in user plans for Friday!-->  
                                                        @foreach($exercise->exercise as $exercises)
                                                            {{$exercises->name}}</a>
                                                        @endforeach
                                                    </h4>
                                                </div>
                                                <div id="collapse{{$ran}}" class="collapse">
                                                    <div class="panel-body">
                                                      
                                                            <div class="form-group">    
                                                                {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                                {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                    <a class="card2-link"  href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                                    {{ Form::text('reps', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                                    {{ Form::text('sets', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                                    {{ Form::text('weight', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                            </div>     
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>




                        <div class="col-md-2 mobileMax" style="padding:0px 10px 0px 0px;flex:0%;width:14.22%;">
                                <div class="card2" style="padding:10px;background-color:#c7e0fc;width:100%;">
                                    <h3 style="margin-bottom:3px;">
                                        <center>Saturday</center>
                                        <hr style="margin:10px;"></hr>
                                    </h3>
                    
                                    <!--Iterate through exercises in the plan!-->  
                                    @foreach($plan->exercises as $exercise)
                                        @if($exercise->day=="Saturday")
                                            <div class="panel-group" id="accordion">
                                                    <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <?$ran=rand(10,10000)?>
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$ran}}">
                                                            <!--Iterate through exercises in user plans for Saturday!-->  
                                                            @foreach($exercise->exercise as $exercises)
                                                                {{$exercises->name}}</a>
                                                            @endforeach
                                                        </h4>
                                                    </div>
                                                    <div id="collapse{{$ran}}" class="collapse">
                                                        <div class="panel-body">
                                                          
                                                                <div class="form-group">    
                                                                    {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                                    {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                        <a class="card2-link"  href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                                        {{ Form::text('reps', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                                        {{ Form::text('sets', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                                        {{ Form::text('weight', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                                </div>     
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>





                            <div class="col-md-2 mobileMax" style="padding:0px 10px 0px 0px;flex:0%;width:14.22%;">
                                    <div class="card2" style="padding:10px;background-color:#c7e0fc;width:100%;">
                                        <h3 style="margin-bottom:3px;">
                                            <center>Sunday</center>
                                            <hr style="margin:10px;"></hr>
                                        </h3>
                        
                                        <!--Iterate through exercises in the plan!-->  
                                        @foreach($plan->exercises as $exercise)
                                            @if($exercise->day=="Sunday")
                                                <div class="panel-group" id="accordion">
                                                        <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <?$ran=rand(10,10000)?>
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$ran}}">
                                                                <!--Iterate through exercises in user plans for Sunday!-->  
                                                                @foreach($exercise->exercise as $exercises)
                                                                    {{$exercises->name}}</a>
                                                                @endforeach
                                                            </h4>
                                                        </div>
                                                        <div id="collapse{{$ran}}" class="collapse">
                                                            <div class="panel-body">
                                                              
                                                                    <div class="form-group">    
                                                                        {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                                        {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                            <a class="card2-link"  href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                                            {{ Form::text('reps', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                                            {{ Form::text('sets', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                                            {{ Form::text('weight', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                                    </div>     
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
        
            <center>
            {{ Form::hidden('_method', 'PUT') }}
            </center>
        {!! Form::close() !!}
        
   
@endsection
