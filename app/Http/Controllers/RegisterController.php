<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
class RegisterController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => ['required','confirmed', Password::min(8)], // Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised()]
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'peminjam';
        $validatedData['isAktif'] = 0;

        User::create($validatedData);

        // $request->session()->flash('success','Registration successful! Please login!')
        return redirect('/login')->with('berhasil','Registrasi berhasil! Silahkan login dengan akun yang telah dibuat!');
    }
}
