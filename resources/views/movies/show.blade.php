@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-4">
            </div>
            <div class="pull-left">
                <h2> Show movie</h2>
            </div>
           
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $movie->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{ $movie->price }}
            </div>
        </div>
        <div class="pull-right"><a href="{{ route ('movies.index') }}" class="btn btn-primary">Back</a></div>

    </div>
@endsection