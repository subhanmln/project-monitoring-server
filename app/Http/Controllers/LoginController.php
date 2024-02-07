<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\View\View;

use App\Models\User;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index() : View
    {
        $title = 'Login';
        return view ('auth.login', compact('title'));
    }

    public function register() : View
    {
        $title = 'Register';

        return view ('auth.register', compact('title'));
    }

    public function register_store(Request $request) : RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'name'     => 'required|min:3',
            'email'    => 'required|email',
            'password' => 'required|min:3',
            'role'     => 'required|min:3',
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role'      => $request->role,
        ]);

        return redirect()->route('login')->with(['success'=>'You Have Successfully Registered!']);
    }

    public function login_proses(Request $request)
    {
        $request -> validate ([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'email'     => $request -> email,
            'password'  => $request -> password
        ];


        if(Auth::attempt($data))
        {
            return redirect()->route('pengelola.index')-> with(['success'=>'Selamat Datang di Monitoring Server!']);;
        }
        else
        {
            return redirect()->route('login')-> with(['error'=>'Email atau Password Salah!']);
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')-> with(['success'=>'Kamu Berhasil Logout!']);
    }
}
