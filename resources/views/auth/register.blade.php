@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <label for="fname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rollnumber') ? ' has-error' : '' }}">
                            <label for="rollnumber" class="col-md-4 control-label">Roll Number</label>

                            <div class="col-md-6">
                                <input id="rollnumber" type="text" class="form-control" name="rollnumber" value="{{ old('rollnumber') }}" required>

                                @if ($errors->has('rollnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rollnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                            <label for="phonenumber" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}" required>

                                @if ($errors->has('phonenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                                <label for="gender" class="col-sm-4 control-label">Gender</label>
                                <div class="col-sm-6" id="gender">
                                    <input type="radio" id="male-select" name="gender" value="male">
                                    <label for="male-select">Male</label>
                                    &nbsp; &nbsp;
                                    <input type="radio" id="female-select" name="gender" value="female">
                                    <label for="female-select">Female</label>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label for="gender" class="col-sm-4 control-label">Hostellite:</label>
                                    <div class="col-sm-6" id="hostellite" style="vertical-align: middle">
                                        <input type="radio" id="yes-select" name="hostellite" value="yes">
                                        <label for="male-select">YES</label>
                                        &nbsp; &nbsp; &nbsp; &nbsp;
                                        <input type="radio" id="no-select" name="gender" value="no">
                                        <label for="female-select">NO</label>
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                    <label for="country" class="col-md-4 control-label">Nationality:</label>

                                    <div class="col-md-6">
                                        <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required>

                                        @if ($errors->has('country'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('bloodgroup') ? ' has-error' : '' }}">
                                    <label for="bloodgroup" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="bloodgroup" type="text" class="form-control" name="bloodgroup" value="{{ old('bloodgroup') }}" required>

                                        @if ($errors->has('bloodgroup'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('bloodgroup') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
