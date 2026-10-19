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

    return redirect('/');
});

// show
Route::get('/ideas/{id}', function ($id) {
    // get the ideas from the db -> return a collection of ideas object
    // Facade way
    // $ideas = DB::table('ideas')->get();

    // Eloquent (ORM) way
    $idea = Idea::findOrFail($id);// return 404 page if idea not found

    // pass the ideas array to the ideas view as prop
    return view('ideas.show', [
        'idea' => $idea,
    ]);
});
