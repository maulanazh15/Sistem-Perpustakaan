<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class DashboardIndexController extends Controller
{
    public function index()
    {
        $jumlah_peminjaman = Peminjaman::where('status_peminjaman','dipinjam')->orWhere('status_peminjaman','dikembalikan')->count();
        $denda = Peminjaman::where('denda','>',0)->sum('denda');
        if(auth()->user()->role === 'peminjam') {
            $jumlah_peminjaman = Peminjaman::where('user_id',auth()->user()->id)->distinct()->count();
            $denda = Peminjaman::where('user_id',auth()->user()->id)->where('denda','>',0)->sum('denda');
        } 
        $date = now()->format('Y-m-d');
        // dd($date);
        $data_peminjaman = Peminjaman::whereDate('created_at',$date)->where('status_peminjaman','dipinjam')->groupby('hour')
        ->orderBy('hour','asc')
        ->get(array(
            DB::raw('HOUR(created_at) as hour'),
            DB::raw('COUNT(*) as total')
        ));
        $sum_peminjaman = array();
        $hour_date = array();
        for ($i=0; $i < count($data_peminjaman) ; $i++) { 
            $sum_peminjaman[$i] = $data_peminjaman[$i]->total;
            $hour_date[$i] = 'Jam '.$data_peminjaman[$i]->hour;
        }
        $chart = (new LarapexChart)->areaChart()
        ->addData('Jumlah Peminjaman', $sum_peminjaman)
        ->setXAxis($hour_date);
        return view('dashboard.index' , [
            'judul' => 'Dashboard',
            'jumlah_buku' => Buku::all()->count(),
            'jumlah_peminjam' => User::where('role', 'peminjam')->count(),
            'jumlah_peminjaman' => $jumlah_peminjaman,
            'jumlah_pustakawan' =>User::where('role','pustakawan')->count(),
            'denda' => $denda,
            'chart'=>$chart,
            'data_pustakawan' => User::where('role','pustakawan')->paginate(10),
            'data_peminjam' => User::where('role','peminjam')->where('isAktif',1)->paginate(10)
        ]);
    }
}
