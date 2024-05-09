<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store()
    {
        $validated = request()->validate(
            [
                'name' => 'required|min:3|max:40',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed',

            ]
        );

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'is_admin' => 0

        ]);
        return redirect()->route('register')->with('success', 'Contul a fost creat!');
    }







    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {
        

        $validated = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required',

            ]
        );

        if (auth()->attempt($validated)) {

            //clear cash
            request()->session()->regenerate();

            return redirect()->route('index')->with('success', 'Ai intrat in cont!');
        } else {
            return redirect()->route('login')->withErrors(
                [
                    'email' => 'Contul cu acest mail nu exista'
                ]
            );
        }
    }

    public function logout()
    {
        auth()->logout();

        //clear session
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('index')->with('success', 'Ai iesit din cont!');
    }
}
