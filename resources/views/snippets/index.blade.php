@extends('layouts.app')

@section('content')
	@foreach($snippets as $snippet)
		<h1><a href="{{ route('home.show', $snippet->id) }}">{{ $snippet->title }}</a></h1>
	@endforeach
@endsection