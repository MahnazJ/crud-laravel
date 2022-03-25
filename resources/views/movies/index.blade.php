@extends('layout')

@section('content')

@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped mt-4">
    <thead>
        <tr>
            <td>ID</td>
            <td>Movie Name</td>
            <td>Game Price</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        
        
        {{-- <td> <a href="{{route ('movies.create') }}" class="btn btn-primary">Create a movie</a></td> --}}

        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->price }}</td>
           <td> <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">Show</a></td>
            <td> <a href="{{route ('movies.create') }}" class="btn btn-primary">Create</a></td>
            <td><a href="{{ route ('movies.edit', $movie->id) }}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="{{ route ('movies.destroy', $movie->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    
        </tr>
        @endforeach
    </tbody>

    

  </table>
  <div class="pull-right"><a href="{{ route ('movies.index') }}" class="btn btn-primary">Back</a></div>

  @endsection