@extends('template')

@section('content')
  <div class="container">
    <h1>Update Country</h1>
      <hr />
      <form action="{{ route('countries.update', $country->id) }}" method="POST">
        {{ csrf_field() }}
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $country->name }}" />

        <label for="abbreviation">Abbreviation:</label>
        <input type="text" class="form-control" name="abbreviation" id="abbreviation" value="{{ $country->abbreviation }}"/>

        <input type="submit" class="btn btn-primary" value="Submit" />
      </form>
  </div>
@endsection
