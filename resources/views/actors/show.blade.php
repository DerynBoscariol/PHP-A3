@extends('layouts/admin')
@section('content')
    <div class="row"> 
        <div class="col">
            <h1 class="display-2"> 
                Actor Profile
            </h1> 
            <a href="{{ route('actors.index') }}">
                <-- Back to all actors
            </a>
        </div>
    </div>
    <div class="row">
        <div>
            <h5 class="card-title">{{ $actor -> fname }} {{ $actor -> lname }}</h5>
            <p>Country of Origin: {{ $actor -> country }}</p>
            <a href="{{ route('actors.edit', $actor -> id ) }}" class="card-link">Edit</a>
            <a href="{{ route('actors.trash', $actor -> id )}}" class="card-link">Delete</a>
        </div>
    </div>
@endsection