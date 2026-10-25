<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Route;

// root page
Route::get('/', function () {
    return view('root');
});

Route::middleware('auth')->group(function () {
    Route::get('/ideas', [IdeaController::class, 'index']);
    Route::get('/ideas/create', [IdeaController::class, 'create']);
    Route::post('/ideas', [IdeaController::class, 'store']);
    Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
    Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
    Route::patch("/ideas/{idea}/edit", [IdeaController::class, 'update']);
    Route::delete("/ideas/{idea}", [IdeaController::class, 'destroy']);

    Route::post("/logout", [SessionController::class, 'destroy']);
});

Route::middleware('guest')->group(function () {
    Route::get("/register", [RegisteredUserController::class, 'create']);
    Route::post("/register", [RegisteredUserController::class, 'store']);

    Route::get("/login", [SessionController::class, 'create'])->name('login');
    Route::post("/login", [SessionController::class, 'store']);
});
