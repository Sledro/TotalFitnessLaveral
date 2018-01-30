@extends('layouts.app')

@section('content')
    <h1>This is the about page</h1>
    <p>Thanks for viewing my about page.</p>
    <ul>
    @if(count($services) > 0)
        @foreach($services as $service)
            <li>{{$service}}</li>
        @endforeach
    @endif
    </ul>
@endsection
