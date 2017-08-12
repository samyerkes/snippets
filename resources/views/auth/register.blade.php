@extends('layouts.dashboard')

@section('content')
<h1>Register</h1>
<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <p class="control">
        <input id="name" type="text" class="input" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
            <span class="help is-danger">{{ $errors->first('name') }}</span>
        @endif
    </p>

    <p class="control">
        <input id="email" type="email" class="input" name="email" placeholder="Email" value="{{ old('email') }}" required> 
        @if ($errors->has('email'))
                <span class="help is-danger">{{ $errors->first('email') }}</span>
        @endif
    </p>

    <p class="control">
        <input id="password" type="password" class="input" name="password" placeholder="Password" required>
        @if ($errors->has('password'))
            <span class="help is-danger">{{ $errors->first('email') }}</span>
        @endif
    </p>

    <p class="control">        
        <input id="password-confirm" type="password" class="input" name="password_confirmation" placeholder="Confirm Password" required>
    </p>

    <button class="button is-success">
        Register
    </button>
</form>
@endsection
