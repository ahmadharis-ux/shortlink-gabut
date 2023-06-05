<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(){
        $pageData = [
            'title' => 'Halaman Login'
        ];
        return view('login-register.login', $pageData);
    }
    function input(Request $request)
    {
        $validasiData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'Login Berhasil!');
        } else {
            return redirect('/login')->with('error', 'Login Gagal, Periksa Kembali Email dan Password Anda.');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('login')->with('success', 'Logout Berhasil!');
    }
}
