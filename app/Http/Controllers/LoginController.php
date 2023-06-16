<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function renderLogin(Request $req)
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if ($request->has('remember_me')) {
            $remember = true;
        } else
            $remember = false;

        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $remember)) {
            return redirect('/')->with('welcome', "Welcome ");
        } else {
            return back()->with('error', __('Email address or password is incorrect'));
        }
    }

    /**
     * Logout the user
     */
    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }
}
