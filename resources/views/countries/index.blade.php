@extends('template')

@section('content')
  <div class="container">
    <h1>Countries:</h1>
    <hr />

    <table>
      <thead>
        <th>Name</th>
        <th>Abbreviation</th>
      </thead>
      <tbody>
        @foreach ($countries as $country)
          <tr>
            <td>{{ $country->name }}</td>
            <td>{{ $country->abbreviation }}</td>
            <td>
              <a class="btn btn-primary btn-sm" href="{{ route('countries.show', $country->id) }}">View</a>
            </td>
            <td>
              <a class="btn btn-primary btn-sm" href="{{ route('countries.edit', $country->id) }}">Edit</a>
            </td>
            <td>
              <a class="btn btn-danger btn-sm" href="{{ route('countries.destroy', $country->id) }}">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <hr />
    <a class="btn btn-primary btn-sm" href="{{ route('countries.create') }}">Add country</a>

  </div>
@endsection