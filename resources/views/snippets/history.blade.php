@extends('layouts.app')

@section('content')
	<h1>History of {{ $snippet->title }}</h1>
	<table-component
	     :data="[
             @foreach($snippet->audits as $audit) 
             	@foreach($audit->getModified() as $field => $value)
	             	{ Field: '{{ ucfirst($field) }}', 
	                Old: '{{ isset($value["old"]) ? $value["old"] : "" }}', 
	                New: '{{ $value["new"] }}',
	                Time: '{{ $audit->updated_at }}',
	                IP: '{{ $audit->ip_address }}' }, 
	            @endforeach
	         @endforeach
         ]"
         sort-by="End"
         sort-order="asc"
         table-class="table"
         :show-caption="false"
         :show-filter="false"
	>
		 <table-column show="Field" label="Field"></table-column>
		 <table-column show="Old" label="Old"></table-column>
		 <table-column show="New" label="New"></table-column>
		 <table-column show="Time" label="Time" data-type="date:YYYY/MM/DD HH:MM:SS"></table-column>
		 <table-column show="IP" label="IP Address"></table-column>
	 </table-component>
@endsection