@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Edit Actor
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('actors.update', $actor->id) }}" method="POST">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT') <!-- specifying the PUT method -->
            <div class="mb-3">
                <label for="fname" class="form-label">First Name:</label>
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname" value="{{ $actor->fname }}">
                @error('fname')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong> 
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname" value="{{ $actor->lname }}">
                @error('lname')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong> 
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country of Origin:</label>
                <input type="text" class="form-control" id="country" name="country" aria-describedby="country" value="{{ $actor->country }}">
                @error('country')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong> 
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <h3>Add or Remove Films</h3>
                <ul>
                    @foreach($allFilms as $film)
                        <li>
                            <label>
                                <input type="checkbox" name="films[]" value="{{ $film->id }}" 
                                {{ $actor->films->contains($film->id) ? 'checked' : '' }}>
                                {{ $film->title }}
                            </label>
                        </li>
                    @endforeach
                </ul>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>        
    </div>
@endsection