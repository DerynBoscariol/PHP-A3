@extends('layouts/admin')
@section('content')
    <div class="row"> 
        <div class="col">
            <h1 class="display-2"> 
                Film Profile
            </h1> 
            <a href="{{ route('films.index') }}">
                <-- Back to all films
            </a>
        </div>
    </div>
    <div class="row">
        <div>
            <h5 class="card-title">{{ $film -> title }}</h5>
            <p>Year: {{ $film -> year }}</p>
            <p>Genre: {{ $film -> genre }}</p>
            <a href="{{ route('films.edit', $film -> id ) }}" class="card-link">Edit</a>
            <a href="{{ route('films.trash', $film -> id )}}" class="card-link">Delete</a>
        </div>
    </div>
@endsection