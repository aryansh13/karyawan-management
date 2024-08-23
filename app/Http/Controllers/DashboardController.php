<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Cuti;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function sisaCutiKaryawan()
{
    // Kuota cuti tahunan
    $cuti_tahunan = 12;

    // Ambil semua karyawan
    $karyawan_list = Karyawan::all();

    // Buat array untuk menyimpan data sisa cuti
    $sisa_cuti_list = [];

    foreach ($karyawan_list as $karyawan) {
        // Hitung total cuti yang telah diambil oleh karyawan
        $total_cuti_diambil = Cuti::where('nomor_induk', $karyawan->nomor_induk)
            ->whereYear('tanggal_cuti', date('Y'))
            ->sum('lama_cuti');

        // Hitung sisa cuti
        $sisa_cuti = $cuti_tahunan - $total_cuti_diambil;

        // Tambahkan data ke dalam array
        $sisa_cuti_list[] = [
            'nomor_induk' => $karyawan->nomor_induk,
            'nama' => $karyawan->nama,
            'sisa_cuti' => $sisa_cuti
        ];
    }

    // Kembalikan data ke view
    return view('sisa_cuti', compact('sisa_cuti_list'));
}


    public function karyawanBaru()
    {
        $karyawan = Karyawan::whereDate('tanggal_bergabung', '>=', date('Y-m-d'))->limit(3)->get();
        return response()->json($karyawan);
    }
    public function cutiKaryawan()
    {
        $cuti = Cuti::all();
        return view('cuti', compact('cuti'));
    }
    public function index()
    {
        $karyawan = Karyawan::simplePaginate(10);
        return view('dashboard', compact('karyawan'));
    }

    public function show($nomor_induk)
    {
        $karyawan = Karyawan::where('nomor_induk', $nomor_induk)->firstOrFail();
        return response()->json($karyawan);
        return view('dashboard', ['apiToken' => $user->api_token]);
    }

    public function store(Request $request)
    {
        $karyawan = Karyawan::create($request->all());
        return response()->json($karyawan);
        return view('dashboard', ['apiToken' => $user->api_token]);
    }

    public function update(Request $request, $nomor_induk)
    {
        $karyawan = Karyawan::findOrFail($nomor_induk);
        $karyawan->update($request->all());
        return response()->json($karyawan);
        return view('dashboard', ['apiToken' => $user->api_token]);
    }
}
