<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
        /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function LoginView()
    {   
        // mengembalikan tampilan form login
        return view('login', [
            "title" => "Login",
        ]);

    }
    
    public function RegisterView()
    {   
        // mengembalikan tampilan form registrasi
        return view('register', [
            "title" => "Register",
        ]);
    }

    public function create()
    {
        // melakukan validasi agar dapat dipastikan bahwa data yang dikirim sesuai dengan format yang ditentukan
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

        // melakukan encrypt pada password user
        if ($UserInfo) {
            $password = $UserInfo['Password'];
            $UserInfo['Password'] = Hash::make($password);
            
            // memasukan informasi user kedalam database
            User::create($UserInfo);

            // mengembalikan tampilan ke halaman login
            return view('login', [
                "title" => "Login"
            ]);

        } 
    }


    public function authenticate(Request $request)
    {   
        // validasi untuk memastikan bahwa form sudah terisi dan memiliki format email yang sesuai
        $credentials = $request->validate([
            'Email' => ['required', 'email'],
            'Password' => ['required'],
        ]);

        // pengkondisian untuk melakukan pengecekan kebenaran password dan email yang di input oleh user
        if (Auth::attempt($credentials)) {
            // membuat session baru untuk dapat mengakses halaman dashboard
            $request->session()->regenerate();

            // pindahkan tampilan ke halaman dashboard jika email dan password benar
            return redirect()->intended('/dashboard', [
                "title" => "Dashboard",
                "nama" => ""
            ]);
        }
        
        // kondisi dimana email dan password tidak sesuai maka akan dikembalikan notifikasi error
        return back()->withErrors([
            'Email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function logout(Request $request)
    {   
        // untuk menghapus session yang sedang berjalan
        Auth::logout();
    
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        // mengembalikan tampilan ke halaman login
        return redirect('/login');
    }
}
