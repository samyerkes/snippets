@extends('layouts.dashboard')

@section('content')

	<table-component
	     :data="{{ $snippets }}"
         sort-by="Title"
         sort-order="asc"
         table-class="table"
         :show-caption="false"
         :show-filter="false"
	>
		 <table-column show="title" label="Title"></table-column>
		 <table-column show="body" label="Body"></table-column>
		 <table-column show="created_at" label="Time"></table-column>
	 </table-component>

	{{-- @if($snippets->count())
		<snippetget :token="'{{ Auth::user()->api_token }}'"></snippetget>
	@else
		<p class="has-text-centered">Oh no! Looks like you don't have any snippets yet.</p>
	@endif --}}
@endsection