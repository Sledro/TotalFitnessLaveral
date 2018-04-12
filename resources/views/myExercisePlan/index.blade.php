@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
            <div class="card" style="padding:15px;">
                <h2>
                    Monday
                </h2>
                <p>    
                    <!--Iterate through list of user assigned exercise plan!-->      
                    @foreach($exercisePlan as $plan)
                        <!--Iterate through  assigned exercises plan details!-->  
                        @foreach($plan->exercises as $exercises)
                            @if($exercises->day=="Monday")
                            
                                <!--Iterate through exercises in user plans for Monday!-->  
                                @foreach($exercises->exercise as $exercise)
                                    
                                    <div id="card-282411">
                                            <div class="card" style="padding:5px;">
                                                <div class="card-header">
                                                    <a class="card-link" data-toggle="collapse" data-parent="#card-282411" href="#card-element-406681">{{$exercise->name}}</a><br/>
                                                    <b>Sets:</b> {{$exercises->sets}} <br/>
                                                    <b>Reps:</b> {{$exercises->reps}} <br/>
                                                    <b>Weight:</b> {{$exercises->weight}}<br/>
                                                </div>
                                                <div id="card-element-406681" class="collapse show">
                                                    <div class="card-block">
                                                        {{$exercise->description}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            @endif
                        @endforeach
                    @endforeach                    
                </p>
            </div>
        </div>  
        
        <div class="col-md-2">
                <div class="card" style="padding:15px;">
                    <h2>
                        Monday
                    </h2>
                    <p>    
                        <!--Iterate through list of user assigned exercise plan!-->      
                        @foreach($exercisePlan as $plan)
                            <!--Iterate through  assigned exercises plan details!-->  
                            @foreach($plan->exercises as $exercises)
                                @if($exercises->day=="Monday")
                                
                                    <!--Iterate through exercises in user plans for Monday!-->  
                                    @foreach($exercises->exercise as $exercise)
                                        
                                        <div id="card-282411">
                                                <div class="card" style="padding:5px;">
                                                    <div class="card-header">
                                                        <a class="card-link" data-toggle="collapse" data-parent="#card-282411" href="#card-element-406681">{{$exercise->name}}</a><br/>
                                                        <b>Sets:</b> {{$exercises->sets}} <br/>
                                                        <b>Reps:</b> {{$exercises->reps}} <br/>
                                                        <b>Weight:</b> {{$exercises->weight}}<br/>
                                                    </div>
                                                    <div id="card-element-406681" class="collapse show">
                                                        <div class="card-block">
                                                            {{$exercise->description}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach                    
                    </p>
                </div>
            </div>  

            <div class="col-md-2">
                    <div class="card" style="padding:15px;">
                        <h2>
                            Monday
                        </h2>
                        <p>    
                            <!--Iterate through list of user assigned exercise plan!-->      
                            @foreach($exercisePlan as $plan)
                                <!--Iterate through  assigned exercises plan details!-->  
                                @foreach($plan->exercises as $exercises)
                                    @if($exercises->day=="Monday")
                                    
                                        <!--Iterate through exercises in user plans for Monday!-->  
                                        @foreach($exercises->exercise as $exercise)
                                            
                                            <div id="card-282411">
                                                    <div class="card" style="padding:5px;">
                                                        <div class="card-header">
                                                            <a class="card-link" data-toggle="collapse" data-parent="#card-282411" href="#card-element-406681">{{$exercise->name}}</a><br/>
                                                            <b>Sets:</b> {{$exercises->sets}} <br/>
                                                            <b>Reps:</b> {{$exercises->reps}} <br/>
                                                            <b>Weight:</b> {{$exercises->weight}}<br/>
                                                        </div>
                                                        <div id="card-element-406681" class="collapse show">
                                                            <div class="card-block">
                                                                {{$exercise->description}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endforeach                    
                        </p>
                    </div>
                </div>  


                <div class="col-md-2" style="width: 10.499999995%">
                        <div class="card" style="padding:15px;">
                            <h2>
                                Monday
                            </h2>
                            <p>    
                                <!--Iterate through list of user assigned exercise plan!-->      
                                @foreach($exercisePlan as $plan)
                                    <!--Iterate through  assigned exercises plan details!-->  
                                    @foreach($plan->exercises as $exercises)
                                        @if($exercises->day=="Monday")
                                        
                                            <!--Iterate through exercises in user plans for Monday!-->  
                                            @foreach($exercises->exercise as $exercise)
                                                
                                                <div id="card-282411">
                                                        <div class="card" style="padding:5px;">
                                                            <div class="card-header">
                                                                <a class="card-link" data-toggle="collapse" data-parent="#card-282411" href="#card-element-406681">{{$exercise->name}}</a><br/>
                                                                <b>Sets:</b> {{$exercises->sets}} <br/>
                                                                <b>Reps:</b> {{$exercises->reps}} <br/>
                                                                <b>Weight:</b> {{$exercises->weight}}<br/>
                                                            </div>
                                                            <div id="card-element-406681" class="collapse show">
                                                                <div class="card-block">
                                                                    {{$exercise->description}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endforeach                    
                            </p>
                        </div>
                    </div>  


                    <div class="col-md-2">
                            <div class="card" style="padding:15px;">
                                <h2>
                                    Monday
                                </h2>
                                <p>    
                                    <!--Iterate through list of user assigned exercise plan!-->      
                                    @foreach($exercisePlan as $plan)
                                        <!--Iterate through  assigned exercises plan details!-->  
                                        @foreach($plan->exercises as $exercises)
                                            @if($exercises->day=="Monday")
                                            
                                                <!--Iterate through exercises in user plans for Monday!-->  
                                                @foreach($exercises->exercise as $exercise)
                                                    
                                                    <div id="card-282411">
                                                            <div class="card" style="padding:5px;">
                                                                <div class="card-header">
                                                                    <a class="card-link" data-toggle="collapse" data-parent="#card-282411" href="#card-element-406681">{{$exercise->name}}</a><br/>
                                                                    <b>Sets:</b> {{$exercises->sets}} <br/>
                                                                    <b>Reps:</b> {{$exercises->reps}} <br/>
                                                                    <b>Weight:</b> {{$exercises->weight}}<br/>
                                                                </div>
                                                                <div id="card-element-406681" class="collapse show">
                                                                    <div class="card-block">
                                                                        {{$exercise->description}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endforeach                    
                                </p>
                            </div>
                        </div>  

            
    		<div class="col-md-5" style="width: 10.499999995%">
            <div class="card" style="padding:15px;">
                <h2>
                    Monday
                </h2>
                <p>    
                    <!--Iterate through list of user assigned exercise plan!-->      
                    @foreach($exercisePlan as $plan)
                        <!--Iterate through  assigned exercises plan details!-->  
                        @foreach($plan->exercises as $exercises)
                            @if($exercises->day=="Monday")
                            
                                <!--Iterate through exercises in user plans for Monday!-->  
                                @foreach($exercises->exercise as $exercise)
                                    
                                    <div id="card-282411">
                                            <div class="card" style="padding:5px;">
                                                <div class="card-header">
                                                    <a class="card-link" data-toggle="collapse" data-parent="#card-282411" href="#card-element-406681">{{$exercise->name}}</a><br/>
                                                    <b>Sets:</b> {{$exercises->sets}} <br/>
                                                    <b>Reps:</b> {{$exercises->reps}} <br/>
                                                    <b>Weight:</b> {{$exercises->weight}}<br/>
                                                </div>
                                                <div id="card-element-406681" class="collapse show">
                                                    <div class="card-block">
                                                        {{$exercise->description}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            @endif
                        @endforeach
                    @endforeach                    
                </p>
            </div>
        </div>  

	</div>
</div>
@endsection
