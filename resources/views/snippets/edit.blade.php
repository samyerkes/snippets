@extends('layouts.app')

@section('content')
	<snippet-edit :token="'{{ Auth::user()->api_token }}'" :snippet="{{ $snippet }}"></snippet-edit>
@endsection