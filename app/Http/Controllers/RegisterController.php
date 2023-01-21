<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
            // 'password' => [
            //     'required',
            //     Password::min(8)
            //         ->letters()
            //         ->mixedCase()
            //         ->numbers()
            //         ->symbols()
            //         ->uncompromised()
            // ]
            // 'password_confirmation' => 'required|same:password'
        ]);
        dd('registrasi berhasil!!');
    }
}
