@extends('layout.master')
@section('title','Home')
@section('content')

@component('components.jumbotron')
	@slot('jumbotron')
		jumbotron
	@endslot
@endcomponent
@endsection