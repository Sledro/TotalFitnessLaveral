@extends('layouts.app')

@section('content')
<div class="container-fluid" style="padding:0px 0px 0px 0px;">
	<div class="card">
            <h1>{{$exercise->name}}</h1>

            <h4>Primary Body Part</h4>
            <p>
            {{$exercise->bodyPart}} 
            </p>

            <h4>Primary Muscle</h4>
            <p>
            {{$exercise->muscle}}     
            </p>

            <h3>Video</h3>
            <p>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$exercise->video}}" allowfullscreen></iframe>
                </div>
            </p>

            <h3>Description</h3>
            <p>
            {{$exercise->description}}      
            </p>
        </div>     
	</div>
</div>
@endsection
