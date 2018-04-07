@if(count($posts) >= 1)  
@foreach($posts as $post)

  
       
            <div class="card ">
                <div class="card-header ">
                        <div class="float-left">
                            <img class="usravatar" src="{{asset('img/avatars/default-avatar.png')}}">
                        </div>
                <h4 class="card-title" style="padding:20px;margin-left:55px;"><a href="/profile/{{$post->users->username}}">{{$post->users->name}}</a> says:</h4>
                </div>
                <div class="card-body ">
                    <h1 class="card-title">{{$post->body}}</h1>
                </div>
                <div class="card-footer ">

                    <hr>
                    <div class="stats">
                     
                        <div class="legend">
                            <i class="fa fa-clock-o"></i>  Written on: {{$post->created_at}}
                        </div>
                    </div>
                    <a href="/newsfeed/{{$post->id}}/edit">
                        <div class="float-right">
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-edit"></span> Edit
                            </button>&nbsp;
                            </a>
                            {!!Form::open(['action' => ['NewsfeedController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-default btn-sm'])}}
                            {!!Form::close()!!}
                        </div>
                </div>
            </div>
@endforeach
@else
    <div class="card ">
       Here you will see posts from people you follow on your feed. To begin follow a friend or person of intrest.
    </div>
@endif