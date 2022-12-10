<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function laporan()
    {
        $jumlahPustakawan = User::where('role','pustakawan')->count();
        $pustakawanAktif = User::where('role','pustakawan')->where('isAktif',1)->count();
        $chart = (new LarapexChart)->pieChart()
        ->setTitle('Keaktifan pustakawan')
        ->setSubtitle('Pustakawan online vs Pustakawan offline')
        ->addData([$pustakawanAktif,$jumlahPustakawan-$pustakawanAktif])->setColors(['#00FF00','#FF0000'])
        ->setLabels(['Pustakawan online', 'Pustakawan offline']);
        return view('dashboard.kepala.pustakawan.laporan', [
            'judul' => 'Laporan Data Pustakawan',
            'data_pustakawan' => User::where('role','pustakawan')->paginate(10),
            'chart' => $chart
        ]);
    }

    public function index()
    {
        return view('dashboard.kepala.pustakawan.index', [
            'judul' => 'Data Pustakawan',
            'data_pustakawan' => User::where('role','pustakawan')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kepala.pustakawan.create', [
            'judul' => 'Daftar Pustakawan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => ['required', Password::min(8)], // Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised()]
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'pustakawan';
        $validatedData['isAktif'] = 0;

        User::create($validatedData);

        return redirect('/dashboard/pustakawan')->with('berhasil', 'Pustakawan berhasil didaftarkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.kepala.pustakawan.edit', [
            'judul' => 'Ubah data Pustakawan'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::where('id', $user->id)->delete();

        return redirect('/dashboard/pustakawan')->with('berhasil','Pustakawan berhasil dihapus!');
    }
}
