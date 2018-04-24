@extends('layouts.app')

@section('content')
<div class="card2" style="padding:10px;">
        <center><h3 style="margin-top:10px;margin-bottom:20px;">Edit Training Plan
                {!! Form::open(['action' => ['ExercisePlansController@delete'], 'method' => 'POST']) !!}
                {{ Form::submit('Delete Plan', ['class' => 'btn btn-danger', 'style' => 'float:right;align:right;margin-right:10px;']) }}
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::hidden('planID', $plan->id) }}
                {!! Form::close() !!}


                {!! Form::open(['action' => ['ExercisePlansController@update'], 'method' => 'POST']) !!}
                {{ Form::submit('Update Plan', ['class' => 'btn btn-primary', 'style' => 'float:right;align:right;margin-right:10px;']) }}
                {{ Form::hidden('planID', $plan->id) }}
                </h3></center>
    <hr style="margin:10px;"></hr>


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
                    {{ Form::hidden('planDetailsID', $exercise->id) }}
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
                                                {{ Form::select('exerciseList[1][]', $exerciseList) }} <br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('description', 'Exercise Description') }} <br/>
                                                    <a href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('reps[1][]', 'Number of Reps') }} <br/>
                                                    {{ Form::text('reps[1][]', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('sets[1][]', 'Number of Sets') }} <br/>
                                                    {{ Form::text('sets[1][]', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('weight[1][]', 'Weight (kg)') }} <br/>
                                                    {{ Form::text('weight[1][]', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
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
                        {{ Form::hidden('planDetailsID', $exercise->id) }}
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
                                                    {{ Form::label('exerciseList[2][]', 'Exercise') }} <br/>
                                                    {{ Form::select('exerciseList[2][]', $exerciseList) }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('description', 'Exercise Description') }} <br/>
                                                        <a href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('reps[2][]', 'Number of Reps') }} <br/>
                                                        {{ Form::text('reps[2][]', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('sets[2][]', 'Number of Sets') }} <br/>
                                                        {{ Form::text('sets[2][]', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('weight[2][]', 'Weight (kg)') }} <br/>
                                                        {{ Form::text('weight[2][]', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
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
                            {{ Form::hidden('planDetailsID', $exercise->id) }}
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
                                                        {{ Form::label('exerciseList[3][]', 'Exercise') }} <br/>
                                                        {{ Form::select('exerciseList[3][]', $exerciseList) }} <br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('description', 'Exercise Description') }} <br/>
                                                            <a href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('reps[3][]', 'Number of Reps') }} <br/>
                                                            {{ Form::text('reps[3][]', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('sets[3][]', 'Number of Sets') }} <br/>
                                                            {{ Form::text('sets[3][]', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('weight[3][]', 'Weight (kg)') }} <br/>
                                                            {{ Form::text('weight[3][]', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
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
                                {{ Form::hidden('planDetailsID', $exercise->id) }}
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
                                                            {{ Form::label('exerciseList[4][]', 'Exercise') }} <br/>
                                                            {{ Form::select('exerciseList[4][]', $exerciseList) }} <br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                <a class="card2-link"  href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('reps[4][]', 'Number of Reps') }} <br/>
                                                                {{ Form::text('reps[4][]', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('sets[4][]', 'Number of Sets') }} <br/>
                                                                {{ Form::text('sets[4][]', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('weight[4][]', 'Weight (kg)') }} <br/>
                                                                {{ Form::text('weight[4][]', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
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
                                    {{ Form::hidden('planDetailsID', $exercise->id) }}
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
                                                                {{ Form::label('exerciseList[5][]', 'Exercise') }} <br/>
                                                                {{ Form::select('exerciseList[5][]', $exerciseList) }} <br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                    <a class="card2-link"  href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('reps[5][]', 'Number of Reps') }} <br/>
                                                                    {{ Form::text('reps[5][]', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('sets[5][]', 'Number of Sets') }} <br/>
                                                                    {{ Form::text('sets[5][]', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('weight[5][]', 'Weight (kg)') }} <br/>
                                                                    {{ Form::text('weight[5][]', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
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
                                        {{ Form::hidden('planDetailsID', $exercise->id) }}
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
                                                                    {{ Form::label('exerciseList[6][]', 'Exercise') }} <br/>
                                                                    {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                        <a class="card2-link"  href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('reps[6][]', 'Number of Reps') }} <br/>
                                                                        {{ Form::text('reps', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('sets[6][]', 'Number of Sets') }} <br/>
                                                                        {{ Form::text('sets[6][]', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('weight[6][]', 'Weight (kg)') }} <br/>
                                                                        {{ Form::text('weight[6][]', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
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
                                            {{ Form::hidden('planDetailsID', $exercise->id) }}
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
                                                                        {{ Form::label('exerciseList[7][]', 'Exercise') }} <br/>
                                                                        {{ Form::select('exerciseList[7][]', $exerciseList) }} <br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                            <a class="card2-link"  href="../../exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('reps[7][]', 'Number of Reps') }} <br/>
                                                                            {{ Form::text('reps[7][]', $exercise->reps, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('sets[7][]', 'Number of Sets') }} <br/>
                                                                            {{ Form::text('sets[7][]', $exercise->sets, array('size'=>15, 'maxlength'=>10)) }} <br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('weight[7][]', 'Weight (kg)') }} <br/>
                                                                            {{ Form::text('weight[7][]', $exercise->weight, array('size'=>15, 'maxlength'=>10)) }} <br/>
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
