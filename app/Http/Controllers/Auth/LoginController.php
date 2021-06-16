<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(): Factory|View|Application
    {
        return view('auth.login');
    }


    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Mot de passe invalide');
        }
        return redirect()->route('dashboard');
    }
}
