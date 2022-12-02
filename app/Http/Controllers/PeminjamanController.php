<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function histori(Request $request)
    {
        $id = auth()->user()->id;
        return view('dashboard.peminjam.histori', [
            'judul' => 'Histori Peminjaman Buku',
            'data_peminjaman' => Peminjaman::where('user_id', $id)->get()
        ]);
    }

    public function booking(StorePeminjamanRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['status_peminjaman'] = 'book';
        $validatedData['tanggal_peminjaman'] = now();
        $validatedData['tanggal_pengembalian'] = now()->addDays(7);
        Peminjaman::create($validatedData);

        return redirect()->back()->with('berhasil', 'Anda berhasil membooking buku');
    }
    
    public function index()
    {
        return view('dashboard.peminjaman.index' ,[
            'judul' => 'Data Peminjaman Buku',
            'data_peminjaman' => Peminjaman::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeminjamanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeminjamanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeminjamanRequest  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Peminjaman $peminjaman)
    {
        Peminjaman::where('id', $peminjaman->id)->update(['status_peminjaman' => 'dipinjam']);

        return redirect()->back()->with('berhasil','Berhasil menyetujui peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
