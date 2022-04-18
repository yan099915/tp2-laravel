<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function LoginView()
    {
        return view('login', [
            "title" => "Login",
        ]);

    }
    
    public function RegisterView()
    {
        return view('register', [
            "title" => "Register",
        ]);
    }

    public function Register()
    {

        $UserInfo = request()->validate([
            'Email' => 'required|email:dns',
            'Password' => ['required', 'min:5','max:255', ],
            'NamaDepan' => 'required|max:255',
            'NamaBelakang' => 'required|max:255',
            'Usia' => 'required|max:3',
            'Nik' => 'required|min:5|max:255',
            'Telp' => 'required|min:5|max:255',
            'Alamat' => 'required|min:5|max:255',
        ]);

        if ($UserInfo) {
            $password = $UserInfo['Password'];
            $UserInfo['Password'] = bcrypt($password);
            
            User::create($UserInfo);

            return view('home', [
                "title" => "Welcome"
            ]);

        } 
    }

    public function Login(Request $request)
    {
        $LoginInfo = $request->validate([
            'Email' => 'required|email:dns',
            'Password' => 'required',
        ]);
        
        if (Auth::attempt($LoginInfo)){
                $request->session()->regenerate();

                return redirect()->intended('home');
            }
            else {        

                return back()->with('loginError', 'Login Failed');
            }

    }

}
