<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    function index(){
        $pageData = [
            'title' => 'Halaman Login'
        ];
        return view('login-register.daftar', $pageData);
    }
    function input(Request $request){
        $validasiData = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
        ]);
        $validasiData['password'] = Hash::make($validasiData['password']);

        try {
            User::create($validasiData);
            return redirect('/login')->with('success', 'Pendaftaran Berhasil, Silahkan Login!');
        } catch (\Exception $e) {
            return redirect('/daftar')->with('error', 'Pendaftaran Gagal, Silahkan Coba Lagi!');
        }
    }
}
