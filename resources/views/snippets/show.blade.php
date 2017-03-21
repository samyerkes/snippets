@extends('layouts.app')

@section('content')
	<div class="columns">
		<h1 class="column is-11">{{ $snippet->title }}</h1>
		<a class="column is-1" href="{{ route('snippets.edit', $snippet->id) }}">Edit</a>
	</div>
	<snippet :snippet="{{ $snippet }}" :token="'{{ Auth::user()->api_token }}'"></snippet>
@endsection