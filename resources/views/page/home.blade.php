@extends('layout.master')
@section('title','Home')
@section('content')

@component('components.carousel')
  @slot('class')
    carousel
  @endslot
@endcomponent
<h1>Home</h1>
<h1>update</h1>

@endsection