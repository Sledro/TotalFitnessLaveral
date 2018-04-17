@extends('layouts.app')

@section('content')
	<div class="card">
		@if(isset($details))
		<p> The Search results for your query <b> {{ $query }} </b> are :</p>
		<h2>See your search results below</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Location</th>
				</tr>
			</thead>
			<tbody>
				@foreach($details as $user)
				<tr>
					<td><a href="/user/{{$user->username}}">{{$user->name}}</a></td>
					<td>{{$user->county}}, {{$user->town}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@elseif(isset($message))
		<p>{{ $message }}</p>
		@endif
	</div>
@endsection

