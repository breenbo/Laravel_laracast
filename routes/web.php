<?php

// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;

// root page
Route::get('/', function () {
    return view('root');
});

// index
Route::get('/ideas', function () {
    // get the ideas from the db -> return a collection of ideas object
    // Facade way
    // $ideas = DB::table('ideas')->get();

    // Eloquent (ORM) way
    $ideas = Idea::where('state', 'pending')->get();

    // pass the ideas array to the ideas view as prop
    return view('ideas.index', [
        'ideas' => $ideas,
    ]);
});

// store
Route::post('/ideas', function () {
    // get the ideas from the post request
    $idea = request('idea');

    // store the new idea in DB: use table
    // Facade way
    // DB::table('ideas')->insert(['description' => $idea]);

    // Eloquent way
    Idea::create([
        "description" => $idea,
        "state" => "pending",
    ]);

    return redirect('/ideas');
});

// show
// Eloquent, binding the url idea parameter to the idea id in the Idea table
Route::get('/ideas/{idea}', function (Idea $idea) {
    // get the ideas from the db -> return a collection of ideas object
    // Facade way
    // $ideas = DB::table('ideas')->get();

    // pass the ideas array to the ideas view as prop
    return view('ideas.show', [
        'idea' => $idea,
    ]);
});

// edit
// Eloquent, binding the url idea parameter to the idea id in the Idea table
// route to display the edit component
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    // pass the ideas array to the ideas view as prop
    return view('ideas.edit', [
        'idea' => $idea,
    ]);
});

// update
// route to edit the data in the DB
Route::patch("/ideas/{idea}/edit", function (Idea $idea) {
    $idea -> update(['description' => request('description')]);

    return redirect("/ideas/{$idea->id}");
});


// destroy
Route::delete("/ideas/{idea}", function (Idea $idea) {
    $idea -> delete();

    return redirect('/ideas');
});
