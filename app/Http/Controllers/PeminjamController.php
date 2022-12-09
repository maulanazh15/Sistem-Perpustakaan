<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PeminjamController extends Controller
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
        $month = now()->month;
        $data_peminjam = User::where('role','peminjam')->whereMonth('created_at', $month)->groupBy('day')
        ->orderBy('day', 'ASC')
        ->get(array(
            DB::raw('DAY(created_at) as day'),
            DB::raw('COUNT(*) as "total"')
        ));
        $sum_peminjam = array();
        $day_date = array();
        for ($i=0; $i < count($data_peminjam) ; $i++) { 
            $sum_peminjam[$i] = $data_peminjam[$i]->total;
            $day_date[$i] = $data_peminjam[$i]->day;
        }
       

        $chart = (new LarapexChart)->lineChart()
        ->setTitle('Jumlah Peminjam Di Bulan '.now()->locale('id')->monthName)
        ->setSubtitle('Jumlah peminjam per tanggal')
        ->addData('Jumlah Peminjam',$sum_peminjam)
        ->setXAxis($day_date)->setGrid();
        return view('dashboard.peminjam.laporan', [
            'judul' => 'Laporan Data Peminjam Buku',
            'data_peminjam' => User::where('role','peminjam')->paginate(10),
            'chart' => $chart
        ]);
    }

    public function index()
    {
        return view('dashboard.peminjam.index', [
            'judul' => 'Data Peminjam',
            'data_peminjam' => User::where('role','peminjam')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.peminjam.create', [
            'judul' => 'Data Peminjam'
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
        $validatedData['role'] = 'peminjam';
        $validatedData['isAktif'] = 0;

        User::create($validatedData);

        return redirect('/dashboard/peminjam')->with('berhasil', 'Peminjam berhasil didaftarkan');
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
        //
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
        // Peminjaman::where('user_id',$user->id)->delete();
        User::destroy($user->id);
        
        // dd($user->id);
        return redirect('/dashboard/peminjam')->with('berhasil','Peminjam berhasil dihapus!');


    }
}
