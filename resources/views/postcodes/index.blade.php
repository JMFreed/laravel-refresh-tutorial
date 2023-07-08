@extends('template')

@section('content')
  <div class="container">
    <h1>Postcodes:</h1>
    <hr />

    <table>
      <thead>
        <th>Name</th>
        <th>Abbreviation</th>
      </thead>
      <tbody>
        @foreach ($postcodes as $postcode)
          <tr>
            <td>{{ $postcode->postcode }}</td>
            <td>{{ $postcode->country()->name }}</td>
            <td>
              <a class="btn btn-primary btn-sm" href="{{ route('postcodes.show', $postcode->id) }}">View</a>
            </td>
            <td>
              <a class="btn btn-primary btn-sm" href="{{ route('postcodes.edit', $postcode->id) }}">Edit</a>
            </td>
            <td>
              <a class="btn btn-danger btn-sm" href="{{ route('postcodes.destroy', $postcode->id) }}">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <hr />
    <a class="btn btn-primary btn-sm" href="{{ route('postcodes.create') }}">Add postcode</a>

  </div>
@endsection