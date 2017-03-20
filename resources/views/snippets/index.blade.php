@extends('layouts.app')

@section('content')
	@if($snippets->count())
		<snippetget :token="'{{ Auth::user()->api_token }}'"></snippetget>
	@else
		<p class="has-text-centered">Oh no! Looks like you don't have any snippets yet.</p>
	@endif
@endsection