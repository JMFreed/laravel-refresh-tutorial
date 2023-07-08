@extends('template')

@section('content')
  <div class="container">
    <h1>Add Country</h1>
      <hr />
      <form action="{{ route('countries.store') }}" method="POST">
        {{ csrf_field() }}
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" />

        <label for="abbreviation">Abbreviation:</label>
        <input class="form-control" name="abbreviation" id="abbreviation"/>

        <input type="submit" class="btn btn-primary" value="Submit" />
      </form>
  </div>
@endsection
