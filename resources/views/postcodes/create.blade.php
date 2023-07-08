@extends('template')

@section('content')
  <div class="container">
    <h1>Add Postcode</h1>
      <hr />
      <form action="{{ route('postcodes.store') }}" method="POST">
        {{ csrf_field() }}
        <label for="postcode">Postcode:</label>
        <input type="text" name="postcode" id="postcode" class="form-control" />

        <label for="country">Country:</label>
        <select class="form-control" name="country" id="country">
          @foreach($countries as $country)
            <option value="{{ $country->id }}">{{ $country->name }}</option>
          @endforeach
        </select>

        <input type="submit" class="btn btn-primary" value="Submit" />
      </form>
  </div>
@endsection
