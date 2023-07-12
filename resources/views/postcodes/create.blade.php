@extends('template')

@section('content')
  <div class="container">
    <h1>Add Postcode</h1>
      <hr />
      <form action="{{ route('postcodes.store') }}" method="POST">
        {{ csrf_field() }}
        <label for="name">Postcode:</label>
        <input type="text" name="name" id="name" class="form-control" />

        <label for="country_id">Country:</label>
        <select class="form-control" name="country_id" id="country_id">
          @foreach($countries as $country)
            <option value="{{ $country->id }}">{{ $country->name }}</option>
          @endforeach
        </select>

        <input type="submit" class="btn btn-primary" value="Submit" />
      </form>
  </div>
@endsection
