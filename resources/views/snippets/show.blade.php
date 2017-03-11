@extends('layouts.app')

@section('content')
	<snippet :id="{{ $snippet->id }}" :message="'{{ $snippet->body }}'"></snippet>
@endsection