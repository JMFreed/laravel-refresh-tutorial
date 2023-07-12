@extends('template')

@section('content')
  <div class="container">
    <p>Postcode: {{ $postcode->name }}</p>
    <p>Country: {{ $postcode->country->name }}</p>
    <hr />
  </div>
@endsection