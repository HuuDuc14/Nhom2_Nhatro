<?php

namespace App\Http\Controllers;

use App\Models\Chutro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:chutro,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|size:10',
        ]);

        $chutro = new Chutro();
        $chutro->username = $request->username;
        $chutro->email = $request->email;
        $chutro->password = Hash::make($request->password);
        $chutro->phone = $request->phone;
        $chutro->save();

        return redirect()->route('login');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/');
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function showRecoverPasswordForm()
{
    return view('auth.recoverpassword'); // Đảm bảo file `recover.blade.php` tồn tại trong thư mục views/auth/passwords.
}

public function showRememberPasswordForm()
{
    return view('auth.rememberpassword');
}

}
