@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">



		<div class="col-md-2" style="padding:10px;flex:0%;">
            <div class="card" style="padding:15px;background-color:#c7e0fc;">
                <h3 style="margin-bottom:3px;">
                    <center>Monday</center>
                    <hr style="margin:5px;"></hr>
                </h3>
                <!--Iterate through list of user assigned exercise plan!-->      
                @foreach($exercisePlan as $plans)
                    @foreach($plans->plan as $plan)
                        <!--Iterate through  assigned exercises plan details!-->  
                        @foreach($plan->exercises as $exercises)
                            @if($exercises->day=="Monday")
                            
                                <!--Iterate through exercises in user plans for Monday!-->  
                                @foreach($exercises->exercise as $exercise)
                                    
                                    <div id="card-282411">
                                            <div class="card" style="padding:5px;">
                                                <div class="card-header">
                                                    <a class="card-link"  href="./exercise/{{$exercise->id}}" d>{{$exercise->name}}</a><br/>
                                                    <b>Sets:</b> {{$exercises->sets}} <br/>
                                                    <b>Reps:</b> {{$exercises->reps}} <br/>
                                                    <b>Weight:</b> {{$exercises->weight}}<br/>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            @endif
                        @endforeach
                    @endforeach                    
                @endforeach     
            </div>
        </div>  
        

		<div class="col-md-2" style="padding:10px;flex:0%;">
                <div class="card" style="padding:15px;background-color:#c7e0fc;">
                    <h3 style="margin-bottom:3px;">
                        <center>Tuesday</center>
                        <hr style="margin:5px;"></hr>
                    </h3>
                    <!--Iterate through list of user assigned exercise plan!-->      
                    @foreach($exercisePlan as $plans)
                        @foreach($plans->plan as $plan)
                            <!--Iterate through  assigned exercises plan details!-->  
                            @foreach($plan->exercises as $exercises)
                                @if($exercises->day=="Tuesday")
                                
                                    <!--Iterate through exercises in user plans for Monday!-->  
                                    @foreach($exercises->exercise as $exercise)
                                        
                                        <div id="card-282411">
                                                <div class="card" style="padding:5px;">
                                                    <div class="card-header">
                                                        <a class="card-link"  href="./exercise/{{$exercise->id}}" d>{{$exercise->name}}</a><br/>
                                                        <b>Sets:</b> {{$exercises->sets}} <br/>
                                                        <b>Reps:</b> {{$exercises->reps}} <br/>
                                                        <b>Weight:</b> {{$exercises->weight}}<br/>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach                    
                    @endforeach     
                </div>
            </div>  



            <div class="col-md-2" style="padding:10px;flex:0%;">
                    <div class="card" style="padding:15px;background-color:#c7e0fc;">
                        <h3 style="margin-bottom:3px;">
                            <center>Wednsday</center>
                            <hr style="margin:5px;"></hr>
                        </h3>
                        <!--Iterate through list of user assigned exercise plan!-->      
                        @foreach($exercisePlan as $plans)
                            @foreach($plans->plan as $plan)
                                <!--Iterate through  assigned exercises plan details!-->  
                                @foreach($plan->exercises as $exercises)
                                    @if($exercises->day=="Wednsday")
                                    
                                        <!--Iterate through exercises in user plans for Monday!-->  
                                        @foreach($exercises->exercise as $exercise)
                                            
                                            <div id="card-282411">
                                                    <div class="card" style="padding:5px;">
                                                        <div class="card-header">
                                                            <a class="card-link"  href="./exercise/{{$exercise->id}}" d>{{$exercise->name}}</a><br/>
                                                            <b>Sets:</b> {{$exercises->sets}} <br/>
                                                            <b>Reps:</b> {{$exercises->reps}} <br/>
                                                            <b>Weight:</b> {{$exercises->weight}}<br/>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endforeach                    
                        @endforeach     
                    </div>
                </div>  



                <div class="col-md-2" style="padding:10px;flex:0%;">
                        <div class="card" style="padding:15px;background-color:#c7e0fc;">
                            <h3 style="margin-bottom:3px;">
                                <center>Thursday</center>
                                <hr style="margin:5px;"></hr>
                            </h3>
                            <!--Iterate through list of user assigned exercise plan!-->      
                            @foreach($exercisePlan as $plans)
                                @foreach($plans->plan as $plan)
                                    <!--Iterate through  assigned exercises plan details!-->  
                                    @foreach($plan->exercises as $exercises)
                                        @if($exercises->day=="Thursday")
                                        
                                            <!--Iterate through exercises in user plans for Monday!-->  
                                            @foreach($exercises->exercise as $exercise)
                                                
                                                <div id="card-282411">
                                                        <div class="card" style="padding:5px;">
                                                            <div class="card-header">
                                                                <a class="card-link"  href="./exercise/{{$exercise->id}}" d>{{$exercise->name}}</a><br/>
                                                                <b>Sets:</b> {{$exercises->sets}} <br/>
                                                                <b>Reps:</b> {{$exercises->reps}} <br/>
                                                                <b>Weight:</b> {{$exercises->weight}}<br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endforeach                    
                            @endforeach     
                        </div>
                    </div>  


    
		<div class="col-md-2" style="padding:10px;flex:0%;">
                <div class="card" style="padding:15px;background-color:#c7e0fc;">
                    <h3 style="margin-bottom:3px;">
                        <center>Friday</center>
                        <hr style="margin:5px;"></hr>
                    </h3>
                    <!--Iterate through list of user assigned exercise plan!-->      
                    @foreach($exercisePlan as $plans)
                        @foreach($plans->plan as $plan)
                            <!--Iterate through  assigned exercises plan details!-->  
                            @foreach($plan->exercises as $exercises)
                                @if($exercises->day=="Friday")
                                
                                    <!--Iterate through exercises in user plans for Monday!-->  
                                    @foreach($exercises->exercise as $exercise)
                                        
                                        <div id="card-282411">
                                                <div class="card" style="padding:5px;">
                                                    <div class="card-header">
                                                        <a class="card-link"  href="./exercise/{{$exercise->id}}" d>{{$exercise->name}}</a><br/>
                                                        <b>Sets:</b> {{$exercises->sets}} <br/>
                                                        <b>Reps:</b> {{$exercises->reps}} <br/>
                                                        <b>Weight:</b> {{$exercises->weight}}<br/>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach                    
                    @endforeach     
                </div>
            </div>  



            <div class="col-md-2" style="padding:10px;flex:0%;">
                    <div class="card" style="padding:15px;background-color:#c7e0fc;">
                        <h3 style="margin-bottom:3px;">
                            <center>Saturday</center>
                            <hr style="margin:5px;"></hr>
                        </h3>
                        <!--Iterate through list of user assigned exercise plan!-->      
                        @foreach($exercisePlan as $plans)
                            @foreach($plans->plan as $plan)
                                <!--Iterate through  assigned exercises plan details!-->  
                                @foreach($plan->exercises as $exercises)
                                    @if($exercises->day=="Saturday")
                                    
                                        <!--Iterate through exercises in user plans for Monday!-->  
                                        @foreach($exercises->exercise as $exercise)
                                            
                                            <div id="card-282411">
                                                    <div class="card" style="padding:5px;">
                                                        <div class="card-header">
                                                            <a class="card-link"  href="./exercise/{{$exercise->id}}" d>{{$exercise->name}}</a><br/>
                                                            <b>Sets:</b> {{$exercises->sets}} <br/>
                                                            <b>Reps:</b> {{$exercises->reps}} <br/>
                                                            <b>Weight:</b> {{$exercises->weight}}<br/>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endforeach                    
                        @endforeach     
                    </div>
                </div>  




                <div class="col-md-2" style="padding:10px;flex:0%;">
                        <div class="card" style="padding:15px;background-color:#c7e0fc;">
                            <h3 style="margin-bottom:3px;">
                                <center>Sunday</center>
                                <hr style="margin:5px;"></hr>
                            </h3>
                            <!--Iterate through list of user assigned exercise plan!-->      
                            @foreach($exercisePlan as $plans)
                                @foreach($plans->plan as $plan)
                                    <!--Iterate through  assigned exercises plan details!-->  
                                    @foreach($plan->exercises as $exercises)
                                        @if($exercises->day=="Sunday")
                                        
                                            <!--Iterate through exercises in user plans for Monday!-->  
                                            @foreach($exercises->exercise as $exercise)
                                                
                                                <div id="card-282411">
                                                        <div class="card" style="padding:5px;">
                                                            <div class="card-header">
                                                                <a class="card-link"  href="./exercise/{{$exercise->id}}" d>{{$exercise->name}}</a><br/>
                                                                <b>Sets:</b> {{$exercises->sets}} <br/>
                                                                <b>Reps:</b> {{$exercises->reps}} <br/>
                                                                <b>Weight:</b> {{$exercises->weight}}<br/>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endforeach                    
                            @endforeach     
                        </div>
                    </div>  
	</div>
</div>
@endsection