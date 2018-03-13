@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="http://lorempixel.com/100/100/people/9/">
        </div>
        <div class="card-info"> <span class="card-title">{{$user->name}}</span>

        </div>
    </div>

    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Stars</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Favorites</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Following</div>
            </button>
        </div>
    </div>

    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
            <div class="panel-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                    <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                        <tbody>
                            <tr>
                            <td>Personal Trainer</td>
                            <td>Jim Smith</td>
                            </tr>
                            <tr>
                            <td>Location</td>
                            <td>Carlow, Ireland</td>
                            </tr>
                            <tr>
                            <td>Profession</td>
                            <td>Student</td>
                            </tr>
                            <tr>
                            <td>Age</td>
                            <td>25</td>
                            </tr>
                            <tr>
                            <tr>
                            <td>Gender</td>
                            <td>Male</td>
                            </tr>
                        </tbody>
                        </table>
                        
                        <a href="#" class="btn btn-primary">My Sales Performance</a>
                        <a href="#" class="btn btn-primary">Team Sales Performance</a>
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
    
    </div>
            
    
@endsection