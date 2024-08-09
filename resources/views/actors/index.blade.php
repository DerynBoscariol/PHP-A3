@extends('layout/adim')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                All Actors
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach($actors as $actor)
        <div class="col-md-4 mb-3">
            <div class="card" style="width:18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$actor -> fname}} {{$actor -> lname}}
                    </h5>
                    <a href="{{ route('actors.edit', $actor -> id) }}" class="card-link">Edit</a>
                    <a href="{{ route('actors.trash', $actor -> id) }}" class="card-link">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection