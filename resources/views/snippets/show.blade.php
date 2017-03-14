@extends('layouts.app')

@section('content')
	<snippet :id="{{ $snippet->id }}" :message="'{{ $snippet->body }}'" :token="'{{ Auth::user()->api_token }}'"></snippet>
@endsection