@extends('template')

@section('content')
  <div class="container">
    <p>Postcode: {{ $postcode->postcode }}</p>
    <p>Country: {{ $postcode->country }}</p>
    <hr />
  </div>
@endsection