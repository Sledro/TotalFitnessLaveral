@extends('layouts.app')

@section('content')
<div class="card mx-auto" >
    <h3 class="card-header">Sign up to Total Fitness for free!</h3>
    <div class="panel-body" style="max-width: 65rem;">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username" style="text-align:left" class="col-md-12 control-label">Username</label>

                <div class="col-md-12">
                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" style="text-align:left" class="col-md-12 control-label">Name</label>

                <div class="col-md-12">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" style="text-align:left" class="col-md-12 control-label">E-Mail Address</label>

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" style="text-align:left" class="col-md-12 control-label">Password</label>

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" style="text-align:left" class="col-md-12 control-label">Confirm Password</label>

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>


            <div class="form-group{{ $errors->has('isPT') ? ' has-error' : '' }} " style="padding-left:7px;">
                <label for="isPT" style="text-align:left" class="col-md-12 control-label">Are you a Personal Trainer?</label>
                <select id="isPT" required name="isPT" class="form-control" style="padding:45px;">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="form-group ">
                <div class="col-md-12 col-md-offset-4 mx-auto">
                    <button type="submit" class="btn btn-primary ">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
