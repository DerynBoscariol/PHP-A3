@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Deleted Actors
        </h1>
    </div>
</div>
<div class="row">
    @foreach ($actors as $actor)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $actor -> fname}} {{ $actor -> lname }}
                    </h5>
                    <a href="{{ route('actors.restore', $actor -> id) }}" class="card-link">Restore</a>
                    <form action="{{ route('actors.destroy', $actor -> id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                        <button type="submit">Delete permanently</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection