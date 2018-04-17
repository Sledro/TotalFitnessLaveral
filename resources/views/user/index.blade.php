@extends('layouts.app')

@section('content')

    <div class="col-lg-6 col-sm-6">
        <div class="card hovercard">
            <div class="card-background">
                <img class="card-bkimg" alt="" src="{{asset('img/profile-wallpaper.jpg')}}">
                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>
            <div class="useravatar">
                <img alt="" src="{{asset('img/avatars/default-avatar.png')}}">
            </div>
            <div class="card-info"> <span class="card-title">{{$user->name}}</span>

            </div>
        </div>

        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <div class="hidden-xs">Profile Information</div>
                </button>
            </div>
        </div>

        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <div class="panel-body">
                        <div class="row">
 
                            <div class=" col-md-9 col-lg-9 " style="float:right;"> 
                                <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                    <td>Personal Trainer</td>
                                    <td><a href="/user/{{$pt->username}}">{{$pt->name}}</td>
                                    </tr>
                                    <tr>
                                    <td>Location</td>
                                    <td>{{$user->county}}, {{$user->country}}</td>
                                    </tr>
                                    <tr>
                                    <td>Profession</td>
                                    <td>{{$user->profession}}</td>
                                    </tr>
                                    <tr>
                                    <td>Age</td>
                                    <td>{{\Carbon\Carbon::parse($user->dob)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}</td>
                                    </tr>
                                    <tr>
                                    <tr>
                                    <td>Gender</td>
                                    <td>{{$user->gender}}</td>
                                    </tr>
                                </tbody>
                                </table>
                                @if (!Auth::guest())
                                     <a href="/mailbox/create/{{$user->id}}" class="btn btn-primary" style="float:left;margin-right:10px;">Private Message</a>
                                    {!! Form::open(['action' => ['UserController@follow', $user->username], 'method' => 'POST']) !!}
                                    {{Form::hidden('userID', $user->id)}}
                                    {{Form::hidden('followerID', Auth::user()->id)}}   
                                    {{ Form::submit('Follow ', ['class' => 'btn btn-primary']) }}
                                    {!! Form::close() !!}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="tab2">
                <h3>This is tab 2</h3>
                </div>
                <div class="tab-pane fade in" id="tab3">
                <h3>This is tab 3</h3>
                </div>
            </div>
        </div>
        <!--Includes the layout feed that is also on the users profile!-->
        @include('layouts.feed') 
    </div>
@endsection