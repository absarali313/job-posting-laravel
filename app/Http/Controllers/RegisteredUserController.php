<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $user_details = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],

        ]);
        $employer_details = $request->validate([
            'employer_name' => ['required'],
            'logo' => ['required']
        ]);

        $user = User::create($user_details);
        $logopath = $request->file('logo')->store('logos');
        $user->employer()->create([
            'name' => $employer_details['employer_name'],
            'logo' => $logopath,
        ]);
        Auth::login($user);

        return redirect('/');
    }
}
