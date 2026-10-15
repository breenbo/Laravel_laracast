<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // get the ideas from the session, empty array as default if nothing => avoid null return
    $ideas = session()->get('ideas', []);

    // pass the ideas array to the ideas view as prop
    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    // get the ideas from the post request
    $idea = request('idea');

    // store the new idea in session
    session()->push('ideas', $idea);

    return redirect('/');
});
