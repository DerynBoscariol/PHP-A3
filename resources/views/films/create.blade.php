@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add a Film Profile
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('films.store') }}" method="post">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="title" class="form-label">Title: </label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="title">
                @error('title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong> 
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year: </label>
                <input type="number" class="form-control" id="year" name="year" aria-describedby="year">
                @error('year')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong> 
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre: </label>
                <input type="text" class="form-control" id="genre" name="genre" aria-describedby="genre">
                @error('genre')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong> 
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="actor" class="form-label">Actors</label>
                <select name="actor" id="actor">
                    @foreach ($actors as $actor)
                        <option value="{{ $actor -> id }}">{{ $actor->fname }} {{$actor->lname}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection