@extends('layouts.dashboard')

@section('content')
	<h1>{{ strtoupper($user->name) }}</h1>
	<apitoken :token="'{{ $user->api_token }}'"></apitoken>
@endsection