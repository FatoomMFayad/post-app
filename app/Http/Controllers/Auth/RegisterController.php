<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
       $this->validate($request,[
           'name' => 'required|max:255',
           'username' => 'required|max:255',
           'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
       ]);
    }
}
