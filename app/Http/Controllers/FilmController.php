<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Film;
use App\Models\Actor;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('films.index', [ 
            'films' => Film::all()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('films.create', ['actors' => Actor::all()]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        $film = Film::create($request->validated());
        $film->actors()->attach($request->film);

        Session::flash('success', "Film added successfully!");
        return redirect() -> route('films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        $actor = $film->actors;
        return view('films.show', ['film' => $film, 'actors' => $actor] /*compact('film')*/);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        $allActors = Actor::all();
        return view('films.edit', [
            'film' => $film,
            'allActors' => $allActors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        $film->update($request->validated());
        $film->actors()->sync($request->input('actors',[]));

        Session::flash('success', 'Film updated successfully!');
        return redirect() -> route('films.index');
    }

   /**
     * Move the specified resource to trashed.
     */
    public function trash($id)
    {
        Film::Destroy($id);
        Session::flash('success', 'Film trashed successfully!');
        return redirect() -> route('films.index');
    }

    /**
     * Remove the specified resource from storage permanently.
     */
    public function destroy($id)
    {
        $film = Film::withTrashed() -> where('id', $id) -> first();
        $film -> forceDelete();
        Session::Flash('success', 'Film deleted successfully!');
        return redirect() -> route('films.index');
    }

    /**
     * Restore the specified resource from trash.
     */
     public function restore($id)
     {
        $film = Film::withTrashed() -> where('id', $id) -> first();
        $film ->restore();
        Session::Flash('success', 'Film restored successfully');
        return redirect() -> route('films.index');
     }

     public function trashed()
     {
         return view('films.trashed', [
             'films' => Film::onlyTrashed() -> get()    
         ]);
     }
}
