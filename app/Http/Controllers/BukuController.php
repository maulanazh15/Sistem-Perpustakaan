<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBukuRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateBukuRequest;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporan()
    {
        if (!((auth()->user()->role === 'kepala') || (auth()->user()->role === 'pustakawan'))) {
            abort(403);
        }
       
        $kategori_buku = Buku::groupby('kategori')->get('kategori');
        $kategori_buku_count = Buku::groupby('kategori')->get(DB::raw('count(*) as total'));
        $array_kategori = array();
        $array_nKategori = array();
        for ($i=0; $i < count($kategori_buku); $i++) { 
            $array_kategori[$i] = $kategori_buku[$i]->kategori;
            $array_nKategori[$i] = $kategori_buku_count[$i]->total;
        }
        $chart = (new LarapexChart)->barChart()
        ->addData('Jumlah', $array_nKategori)
        ->setXAxis($array_kategori)->setGrid();

        return view('dashboard.buku.laporan', [
            'judul' => 'Laporan Buku',
            'chart' => $chart,
            'data_buku' => Buku::latest()->paginate(10)
        ]);
    }

    public function katalog() {
        return view('katalog', [
            'title' => 'Katalog Buku',
            'data_buku' => Buku::latest()->filter(request(['search']))->paginate(12)->withQueryString()
        ]);
    }

    public function index()
    {
        return view('dashboard.buku.index', [
            'judul' => 'Data Buku',
            'data_buku' => Buku::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.buku.create', [
            'judul' => 'Tambah Data Buku'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBukuRequest $request)
    {   
        $validatedData = $request->validated();
        if($request->file('foto_buku')){
            $validatedData['foto_buku']  = $request->file('foto_buku')->store('foto-buku');
        }
        if ($validatedData) {
            Buku::create($validatedData);
            return redirect('/dashboard/buku')->with('berhasil','Buku berhasil ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        return view('dashboard.buku.edit', [
            'judul' => 'Ubah Data Buku',
            'buku' => Buku::find($buku->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBukuRequest  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {
        $validatedData = $request->validated();
        if($request->file('foto_buku')){
            if($request->oldImage){Storage::delete($buku->foto_buku);}
            
            $validatedData['foto_buku']  = $request->file('foto_buku')->store('foto-buku');
        }
        if($validatedData) {
            Buku::where('id', $buku->id)->update($validatedData);
            return redirect('/dashboard/buku')->with('berhasil','Data Buku berhasil diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);
        return redirect('/dashboard/buku')->with('berhasil','Data Buku berhasil dihapus!');
        
    }
}
