<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Add this use statement

class LoginController extends Controller
{
    // ... Your other methods

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'alamat_email' => 'required|email', // Use 'alamat_email' as the field name
            'password' => 'required',
        ]);
    
        if (Auth::attempt(['alamat_email' => $request->alamat_email, 'password' => $request->password])) {
            // Authentication successful
            return redirect()->intended('/home');
        } else {
            // Authentication failed
            return back()->withErrors(['alamat_email' => 'Data Yang Dimasukkan Salah.']);
        }
    }
}


//cmd : composer require laravel/ui