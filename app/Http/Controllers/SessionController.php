<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function destroy(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }

    public function create()
    {
        return view('auth.login');
    }


    public function store(Request $request)
    {

        $details = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        Auth::attempt($details);
        $request->session()->regenerate();

        return redirect()->intended('/');

    }
}
