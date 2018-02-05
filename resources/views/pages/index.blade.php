@extends('layouts.app')

@section('content')
<div class="card text-center">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h5 class="card-title"><u>Total Fitness</u></h5>
    <p class="card-text">Welcome to Total Fitness. Here you can find personal trainers and work with them to create the perfect training plan together.</p>
    <a href="{{ route('register') }}" class="btn btn-primary">Signup</a> or  <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
@endsection
