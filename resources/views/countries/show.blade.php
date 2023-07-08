@extends('template')

@section('content')
  <div class="container">
    <p>Name: {{ $country->name }}</p>
    <p>Abbreviation: {{ $country->abbreviation }}</p>
    <hr />
  </div>
@endsection