<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        if(Auth::user()){
            if(Auth::user()->role == 'admin'){
                return redirect()->intended('/dashboard');
            }
            else if(Auth::user()->role == 'customer'){
                return redirect()->intended('/');
            }
        }
        return view('utama.beranda');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // return redirect()->intended('/');
            if(Auth::user()->role == 'admin'){
                return redirect()->intended('/dashboard');
            }
            else{
                return redirect()->intended('/');
            }
        }

        return back()->with('alert', 'Login gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->intended('/');
    }

    public function updatepw(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'password_lama' => ['required'],
            'password' => ['required'],
            'password_confirmation' => ['required', 'same:password']
        ]);

        if (Hash::check($request->password_lama, $user->password)){
            $user->update(['password' => Hash::make($request->password)]);
            return back()->with('message', 'Password Anda berhasil diubah');
        }

        throw ValidationException::withMessages([
            'password_lama' => 'Password lama Anda tidak valid'
        ]);
    }
}
