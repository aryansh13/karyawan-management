<?php

namespace App\Http\Controllers;

use App\Http\Resources\CutiResources;
use App\Http\Resources\KaryawanResources;
use App\Models\Cuti;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    public function karyawanBaru(){
        return KaryawanResources::collection(Karyawan::where('tanggal_bergabung', '>=', date('Y-m-d'))->limit(3)->get());
    }
    public function cutiKaryawan(){
        return CutiResources::collection(Cuti::all());
    }

    public function index()
    {
        return KaryawanResources::collection(Karyawan::all());
        
    }

    public function show($nomor_induk)
    {
        return new KaryawanResources(Karyawan::findOrFail($nomor_induk));
    }

    public function store(Request $request)
    {
        $karyawan = Karyawan::create($request->all());

        return response()->json([
            'message' => 'Karyawan created successfully',
            'karyawan' => $karyawan
        ]);

        return new KaryawanResources($karyawan);
    }

    public function update(Request $request, $nomor_induk)
    {
        $karyawan = Karyawan::findOrFail($nomor_induk);
        $karyawan->update($request->all());

        return response()->json([
            'message' => 'Karyawan updated successfully',
            'karyawan' => $karyawan
        ]);
        return new KaryawanResources($karyawan);
    }

    public function destroy($nomor_induk)
    {
        Karyawan::findOrFail($nomor_induk)->delete();
        return response()->json([
            'message' => 'Karyawan deleted successfully',
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'token' => $token
        ]);
    }
}
