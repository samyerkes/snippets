@extends('layouts.app')

@section('content')
	<a href="{{ route('snippets.edit', $snippet->id) }}">Edit</a>
	<snippet :id="{{ $snippet->id }}" :message="'{{ $snippet->body }}'" :token="'{{ Auth::user()->api_token }}'"></snippet>
@endsection