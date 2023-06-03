@extends('layout.master')
@section('title','Home')
@section('content')

@component('components.cover')
	@slot('cover')
		cover
	@endslot
@endcomponent
@endsection