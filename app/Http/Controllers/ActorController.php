<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActorRequest;
use App\Http\Requests\UpdateActorRequest;
use App\Models\Actor;
use App\Models\Film;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('actors.index', [
            'actors' => Actor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actors.create', ['films' => Film::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActorRequest $request)
    {
        $actor = Actor::create($request->validated());
        $actor->films()->attach($request->film);

        Session::flash('success', 'Actor added successfully!');
        return redirect() -> route('actors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        return view('actors.show', compact('actor'), ['films' => Film::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
        $allFilms = Film::all();
    
        return view('actors.edit', [
            'actor' => $actor,
            'allFilms' => $allFilms,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActorRequest $request, Actor $actor)
    {
        $actor->update($request->validated());

        $actor->films()->sync($request->input('films',[]));

        Session::flash('success', 'Actor updated successfully!');
        return redirect() -> route('actors.index');
    }

    /**
     * Move the specified resource to trashed.
     */
    public function trash($id)
    {
        Actor::Destroy($id);
        Session::flash('success', 'Actor trashed successfully!');
        return redirect() -> route('actors.index');
    }

    /**
     * Remove the specified resource from storage permanently.
     */
    public function destroy($id)
    {
        $actor = Actor::withTrashed() -> where('id', $id) -> first();
        $actor -> forceDelete();
        Session::Flash('success', 'Actor deleted successfully!');
        return redirect() -> route('actors.index');
    }

    /**
     * Restore the specified resource from trash.
     */
     public function restore($id)
     {
        $actor = Actor::withTrashed() -> where('id', $id) -> first();
        $actor -> restore();
        Session::flash('success', 'Actor restored successfully');
        return redirect() -> route('actors.index');
     }

     public function trashed()
     {
         return view('actors.trashed', [
             'actors' => Actor::onlyTrashed() -> get()    
         ]);
     }
}
