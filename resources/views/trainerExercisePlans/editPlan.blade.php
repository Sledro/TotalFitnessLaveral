@extends('layouts.app')

@section('content')
    <h1>Edit Training Plan</h1>

    {!! Form::open(['action' => ['TrainerExercisePlansController@update', $plan->id], 'method' => 'POST']) !!}
    <div class="form-group">
            {{ Form::label('title', 'Name') }}
            {{ Form::text('title', $plan->name, ['class' => 'form-control', 'placeholder' => 'title']) }}
    </div>


    <!--Iterate through exercises in the plan!-->  
    @foreach($plan->exercises as $exercise)
    <div class="card"> 
      <div class="form-group">    
          {{ Form::label('exerciseList', 'Exercise') }} <br/>
          {{ Form::select('exerciseList', $exerciseList) }}
      </div>
      <div class="form-group">    
          {{$exercise->reps}}
      </div>
    </div>
    @endforeach

    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Update Plan', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection
