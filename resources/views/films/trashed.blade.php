@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Deleted Films
        </h1>
    </div>
</div>
<div class="row">
    @foreach ($films as $film)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $film -> title}}
                    </h5>
                    <a href="{{ route('films.restore', $film -> id) }}" class="card-link">Restore</a>
                    <form action="{{ route('films.destroy', $film -> id)}}" method="POST">
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