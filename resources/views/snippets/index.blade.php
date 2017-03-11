@extends('layouts.app')

@section('content')
	@if($snippets->count())
		@foreach($snippets as $snippet)
			<h1><a href="{{ route('home.show', $snippet->id) }}">{{ $snippet->title }}</a></h1>
		@endforeach
	@else
		<p class="has-text-centered">Oh no! Looks like you don't have any snippets yet.</p>
	@endif
@endsection