<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use App\Models\Buku;
use Carbon\Carbon;
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
            'data_peminjaman' => Peminjaman::where('user_id', $id)->get(),
            'carbon' => Carbon::class
        ]);
    }

    public function booking(StorePeminjamanRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['status_peminjaman'] = 'book';
        Buku::where('id', $validatedData['buku_id'])->update(['status_buku'=>'book']);
        $validatedData['tanggal_peminjaman'] = now();
        $validatedData['tanggal_pengembalian'] = now()->addDays(7);
        Peminjaman::create($validatedData);

        return redirect()->back()->with('berhasil', 'Anda berhasil membooking buku');
    }
    
    public function index()
    {
        return view('dashboard.peminjaman.index' ,[
            'judul' => 'Data Peminjaman Buku',
            'data_peminjaman' =>  Peminjaman::where('status_peminjaman','book')->orWhere('status_peminjaman','dipinjam')->get(),
            'carbon' => Carbon::class
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

    public function perpanjangan(Peminjaman $peminjaman)
    {
        $data =  Carbon::parse($peminjaman->tanggal_pengembalian)->addDays(7);
        // dd($data['tanggal_pengembalian']);
        Peminjaman::where('id', $peminjaman->id)->update(['tanggal_pengembalian' => $data ]);

        return redirect()->back()->with('berhasil','Peminjaman buku berhasil diperpanjang');
    }

    public function pengembalian(Peminjaman $peminjaman)
    {
        Peminjaman::where('id',$peminjaman->id)->update(['status_peminjaman'=>'dikembalikan']);
        Buku::where('id',$peminjaman->buku_id)->update(['status_buku' => 'tersedia']);
        return redirect()->back()->with('berhasil','Pengembalian buku berhasil');
    }

    public function update(Peminjaman $peminjaman)
    {
        Peminjaman::where('id', $peminjaman->id)->update(['status_peminjaman' => 'dipinjam']);
        Buku::where('id',$peminjaman->buku_id)->update(['status_buku' => 'dipinjam']);
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
        Buku::where('id',$peminjaman->buku_id)->update(['status_buku' => 'tersedia']);
        Peminjaman::destroy($peminjaman->id);

        return redirect()->back()->with('berhasil','Berhasil membatalkan peminjaman');
    }
}
