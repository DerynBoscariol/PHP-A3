@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add an Actor Profile
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('actors.store') }}" method="post">
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
                <label for="fname" class="form-label">First Name: </label>
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname">
                @error('fname')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong> 
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name: </label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname">
                @error('lname')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong> 
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country of Origin: </label>
                <input type="text" class="form-control" id="country" name="country" aria-describedby="country">
                @error('country')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong> 
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Films</label>
                <select name="film" id="film">
                    @foreach ($films as $film)
                        <option value="{{ $film -> id }}">{{ $film -> title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection