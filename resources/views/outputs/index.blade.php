@extends('layouts.dashboard')

@section('content')
		<h1>Output</h1>
		<table-component
		     :data="{{ $outputs }}"
	         sort-by="Time"
	         sort-order="asc"
	         table-class="table"
	         :show-caption="false"
	         :show-filter="false"
		>
			 <table-column show="user.name" label="User"></table-column>
			 <table-column show="body" label="Body"></table-column>
			 <table-column show="created_at" label="Time"></table-column>
		 </table-component>
@endsection