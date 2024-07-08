<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/Login');
    }

    public function authentication(Request $request)
    {

        $username = $request->username;
        $password = $request->password;

        if (empty($username) or empty($password)) {
            return back()->withErrors(['loginError' => 'Username dan password harus di isi! - ' . $username . ' ' . $password])->withInput();
        }

        $credentials = $request->validate([
            'username' => ['required', 'username'],
            'password' => ['required'],
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        if (Auth::attempt($credentials)) {
            //jika authentikasi berhasil
            if (Auth::user()->active === 't') {
                return redirect()->intended('/dashboard')->with('success', 'Login successful!');
            } else {
                Auth::logout();
                return redirect()->back()->withErrors([
                    'username' => "Akun anda tidak aktif, Silahkan Hubungi Administrator!",
                ])->withInput();
            }
        }

        // Jika autentikasi gagal
        return redirect()->back()->withErrors([
            'username' => 'Username/Password anda salah!.',
        ])->withInput();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
