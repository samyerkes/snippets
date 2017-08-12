@extends('layouts.dashboard')

@section('content')
<h1>Login</h1>
<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <p class="control has-icon">
        <input id="email" name="email" class="input" type="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        <span class="icon is-small">
        <i class="fa fa-envelope"></i>
      </span> @if ($errors->has('email'))
        <span class="help is-danger">{{ $errors->first('email') }}</span> @endif
    </p>
    <p class="control has-icon">
        <input id="password" name="password" class="input" type="password" placeholder="Password" required>
        <span class="icon is-small">
        <i class="fa fa-lock"></i>
      </span> @if ($errors->has('email'))
        <span class="help is-danger">{{ $errors->first('password') }}</span> @endif
    </p>
    <p class="control">
        <label class="checkbox">
            <input type="checkbox" {{ old( 'remember') ? 'checked' : '' }}> Remember me
        </label>
    </p>
    <p class="control">
        <button class="button is-success">
            Login
        </button>
        <a class="button" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>
    </p>
</form>
@endsection
