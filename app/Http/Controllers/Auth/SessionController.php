<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class SessionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // validate
        $credentials = $request->validate([
            "email" => ["required", "email", "max:255"],
            "password" => ["required", Password::default()],
        ]);
        // login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();// regenerate token and so on
            // redirect
            return redirect('ideas')->with('success', 'You are logged in');
        }

        return back()->withErrors(["email" => "Credentials are fake dude"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(): RedirectResponse
    {
        Auth::logout();

        return redirect("/ideas");
    }
}
