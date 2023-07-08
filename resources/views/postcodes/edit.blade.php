@extends('template')

@section('content')
  <div class="container">
    <h1>Update Postcode</h1>
      <hr />
      <form action="{{ route('postcodes.update', $country->id) }}" method="POST">
        {{ csrf_field() }}
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $postcode->postcode }}" />

        <label for="country">Country:</label>
        <input type="text" class="form-control" name="country" id="country" value="{{ $postcode->country }}"/>

        <input type="submit" class="btn btn-primary" value="Submit" />
      </form>
  </div>
@endsection
