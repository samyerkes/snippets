@extends('layouts.app')

@section('content')
	<snippet-create :token="'{{ Auth::user()->api_token }}'"></snippet-create>
@endsection