<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('login.index', [
    //         'title' => 'Login',
    //     ]);
    // }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            User::where('email', $credentials['email'])->update(['isAktif'=>1]);
            $request->session()->put('email', $credentials['email']);
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->with('gagal','Login Gagal! Username atau Password yang dimasukkan mungkin salah');
    }

    public function logout(Request $request){
        Auth::logout();
        User::where('email', $request->session()->get('email'))->update(['isAktif'=>0]);
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function editdatadiri()
    {
        // dd(User::where('id',auth()->user()->id)->get()[0]);
        return view('dashboard.profile', [
            'judul' => 'Profil',
            'data_diri' => User::where('id',auth()->user()->id)->get()[0]
        ]);
    }

    public function updatedata(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'username'=> 'required',
            'email' => 'required',
            'foto_profil' => 'image|file|max:4000'
        ]);

        if($request->file('foto_profil')){
            $validatedData['foto_profil']  = $request->file('foto_profil')->store('foto-profil');
        }

        User::where('id',auth()->user()->id)->update($validatedData);

        return redirect()->back()->with('berhasil','Berhasil mengedit data profil!');
    }
}
