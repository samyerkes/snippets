@extends('layouts.app')

@section('content')
	<table class="table is-striped">
	  <thead>
	    <tr>
	      <th>User</th>
	      <th>Body</th>
	      <th>Copy</th>
	    </tr>
	  </thead>
	  <tbody>
		@foreach($outputs as $output)
			<tr>
				<td>{{ $output->user->name }}</td>
				<td>{{ $output->body }}</td>
				<td><copy :clipboard="'{{ $output->body }}'"></copy></td>
			</tr>
		@endforeach  	
	  </tbody>
	 </table>
	
@endsection