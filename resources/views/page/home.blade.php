@extends('layout.master')
@section('title','Home')
@section('content')

{{-- <div class="container mx-xl mb-2 mt-1 "> --}}
<img class="img-fluid mb-2 rounded" src="{{asset('/img/brosur-smansaba.jpg')}}"  alt="sman saba" > 
{{-- </div> --}}
@component('components.jumbotron')
	@slot('jumbotron')
		jumbotron
	@endslot
@endcomponent
@endsection