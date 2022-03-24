@extends('movies.layout')

@section('content')


<div class="card-header mt-4">
    Edit Movie
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('movies.update', $movie->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Movie Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $movie->name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Movie Price :</label>
              <input type="text" class="form-control" name="price" value="{{ $movie->price }}"/>
          </div>
          <button type="submit" class="btn btn-primary mb-2">Update Data</button>
          <div class="pull-right"><a href="{{ route ('movies.index') }}" class="btn btn-primary">Back</a></div>
      </form>
  </div>


</div>

@endsection