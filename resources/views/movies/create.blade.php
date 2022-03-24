@extends('movies.layout')

@section('content')


<div class="card-header mt-4">
    Add movies
</div>
<div class="card-body">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif

    <form method="POST" action="{{route ('movies.store') }}">
    <div class="form-group">
        @csrf
        <label for="country_name">Movie Name:</label>
        <input type="text" class="form-control" name="name" />      
    </div>

    <div class="form-group">
        <label for="cases">Price: </label>
        <input type="text" class="form-control" name="price"/>
    </div>
        <button type="submit" class="btn btn-primary mb-2">Add movie</button>

    </form>
    <div class="pull-right"><a href="{{ route ('movies.index') }}" class="btn btn-primary">Back</a></div>

</div>
@endsection
