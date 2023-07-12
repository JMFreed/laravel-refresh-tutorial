@extends('template')

@section('content')
  <div class="container">
    <h1>Update Postcode</h1>
      <hr />
      <form action="{{ route('postcodes.update', $postcode->id) }}" method="POST">
        {{ csrf_field() }}
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $postcode->name }}" />

        <label for="country_id">Country:</label>
        <select class="form-control" name="country_id" id="country_id">
          @foreach($countries as $country)
            <option value="{{ $country->id }}" {{$postcode->country->id == $country->id  ? 'selected' : ''}}>{{ $country->name }}</option>
          @endforeach
        </select>

        <input type="submit" class="btn btn-primary" value="Submit" />
      </form>
  </div>
@endsection
