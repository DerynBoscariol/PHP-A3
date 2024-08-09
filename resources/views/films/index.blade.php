@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                All Films
            </h1>
        </div>
        <div class="col">
            <h3>
                <a href="{{ route('films.create') }}">Add a New Film</a>
            </h3>
        </div>
    </div>
    <div class="row">
        @foreach($films as $film)
        <div class="col-md-4 mb-3">
            <div class="card" style="width:18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$film -> title}}
                    </h5>
                    <a href="{{ route('films.show', $film -> id) }}" class="card-link">See more</a>
                    <a href="{{ route('films.edit', $film -> id) }}" class="card-link">Edit</a>
                    <a href="{{ route('films.trash', $film -> id) }}" class="card-link">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection