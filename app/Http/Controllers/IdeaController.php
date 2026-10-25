<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $ideas = Idea::query()->where(['user_id' => Auth::id()])->get();

        // pass the ideas array to the ideas view as prop
        return view('ideas.index', [
            'ideas' => $ideas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request -> validate([
            'description' => ['required','min:10'],
        ]);
        // Eloquent way
        Idea::create([
            "description" => request('description'),
            "user_id" => Auth::id(),
            "state" => "pending",
        ]);

        return redirect('/ideas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea): View
    {
        // get the ideas from the db -> return a collection of ideas object
        // Facade way
        // $ideas = DB::table('ideas')->get();

        // pass the ideas array to the ideas view as prop
        return view('ideas.show', [
            'idea' => $idea,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea): View
    {
        // pass the ideas array to the ideas view as prop
        return view('ideas.edit', [
            'idea' => $idea,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea): RedirectResponse
    {
        $idea -> update(['description' => request('description')]);

        return redirect("/ideas/{$idea->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea): RedirectResponse
    {
        $idea -> delete();

        return redirect('/ideas');
    }
}
