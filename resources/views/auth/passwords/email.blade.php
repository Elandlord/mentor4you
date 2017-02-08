@extends('layouts.app')

@section('content')
  <div class="login-box-body">
    <p class="login-box-msg">Reset uw wachtwoord</p>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}

            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="row">
                <div class="col-xs-12">
                      <button type="submit" class="btn btn-primary btn-block btn-flat">Stuur mij een resetlink</button>
                </div>
                <!-- /.col -->
                <div style="margin-top:10px;" class="col-xs-12">
                    <a href="{{ url('/login') }}">Inloggen</a><br>
                </div>
                <!-- /.col -->
              </div>


        </form>

  </div>
@endsection
