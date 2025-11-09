<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'email'=>'required|email|max:50',
            'password'=>'required|max:50',
        ]);
        if(Auth::attempt($request->only('email', 'password'))){
            $request->session()->regenerate();
            if($request->user()->role == 'user'){
                return redirect()->intended('/');
            }else{
                return redirect()->intended('dashboard/admin-dashboard');
            }
        }
        return back()->with('loginError', 'Login failed! ');
        
}
public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
}
}
