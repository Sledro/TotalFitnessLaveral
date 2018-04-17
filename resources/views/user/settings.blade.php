@extends('layouts.app')

@section('content')

<div class="card">
        <h1>Profile Settings</h1>
        {!! Form::open(['action' => ['UserController@updateSettings'], 'method' => 'POST']) !!}
        <div class="form-group">
                {{ Form::label('email', 'Email Address') }}
                {{ Form::text('email', $user->email, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
                {{ Form::label('name', 'Full Name') }}
                {{ Form::text('name', $user->name, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
                {{ Form::label('street', 'Street') }}
                {{ Form::text('street', $user->street, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
                {{ Form::label('town', 'Town') }}
                {{ Form::text('town', $user->town, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
                {{ Form::label('country', 'Country') }}
                {{ Form::text('country', $user->country, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
                {{ Form::label('dob', 'Date of birth DD/MM/YY') }}
                {{ Form::text('dob', $user->dob, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
                {{ Form::label('profession', 'Profession') }}
                {{ Form::text('profession', $user->profession, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
                {{ Form::label('gender', 'Gender') }}
                {{ Form::text('gender', $user->gender, ['class' => 'form-control']) }}
        </div>
       
        {{ Form::hidden('uid',  Auth::user()->id) }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Update Profile', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
</div>

@endsection