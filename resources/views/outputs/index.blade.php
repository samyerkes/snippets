@extends('layouts.app')

@section('content')
		<h1>Output</h1>
		<table-component
		     :data="{{ $outputs }}"
	         sort-by="User"
	         sort-order="asc"
	         table-class="table"
	         :show-caption="false"
	         :show-filter="false"
		>
			 <table-column show="user.name" label="User"></table-column>
			 <table-column show="body" label="Body"></table-column>
		 </table-component>
@endsection