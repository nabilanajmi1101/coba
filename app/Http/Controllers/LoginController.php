<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function indexL(){
        return view("pages.login.login");
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/beranda');
        }

        return back()->withErrors([
            'username' => 'username tidak ditemukan.',
            'password' => 'pasword salah.'
            ])->onlyInput(['username','password']);
    }

    public function indexR(){
        return view("pages.login.register");
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'noinduk' => 'required',
            'email' => 'required|unique:siswas',
            'kelas' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create(
            [
                'username' => $validatedData['username'],
                'password' => $validatedData['password'],
            ]
        );
        Siswa::create(
            [
                'nama' => $validatedData['nama'],
                'email' => $validatedData['email'],
                'noinduk' => $validatedData['noinduk'],
                'kelas' => $validatedData['kelas'],
            ]
        );
        return redirect(route("auth.login"))->with('success', 'Registration Succesfull! Please Login');
        Guru::create(
            [
                'nama' => $validatedData['nama'],
                'email' => $validatedData['email'],
                'noinduk' => $validatedData['noinduk'],
            ]
        );
        return redirect(route("auth.login"))->with('success', 'Registration Succesfull! Please Login');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
