@extends('layout.master')
@section('title','Blog')
@section('content')

@component('components.carousel')
  @slot('class')
    carousel
  @endslot
@endcomponent

@endsection
