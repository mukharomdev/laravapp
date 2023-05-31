@extends('layout.master')
@section('title','Home')
@section('content')
<div class="container text-center mt-3 p-4 bg-white">
@component('components.carousel')
  @slot('class')
    carousel
  @endslot
@endcomponent
<h1>Home</h1>
<h1>update</h1>

</div>
@endsection