<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{

        public function index()
{
    $pegawais = Pegawai::with('shifts')->whereHas('shifts')->get();

    return response()->json([
        'success' => true,
        'message' => 'Daftar Data Pegawai',
        'data' => $pegawais,
    ], 200);
}

public function store(Request $request) 
{
    $request->validate([
        'nama' => 'required|unique:pegawais|max:255|',
        'telp' => 'required|numeric',
        'nik'  => 'required|numeric'
    ]);

    $pegawais = Pegawai::create([
        'nama' => 'required|unique:pegawais|max:255|',
        'telp' => 'required|numeric',
        'nik' => 'required|numeric',
        'shift_id' => $request->shift_id
        
    ]);

        if($pegawais)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambahkan Pegawai',
                'data' => $pegawais
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal Menambahkan Pegawai',
                'data' => $pegawais
            ], 409);
        }

}

public function show($id)
{
    $pegawais = Pegawai::with('shifts')->where('id', $id)->get();

    return response()->json([
        'success' => true,
        'message' => 'Detail Data Pegawai',
        'data'    => $pegawais
    ], 200);   
}
        
   
public function edit($id)
{
    $pegawais = Pegawai::with('shifts')->where('id', $id)->first();

    return response()->json([
        'success' => true,
        'message' => 'Detail Data Teman',
        'data'    => $pegawais
    ], 200);   
}
 
public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|unique:pegawais|max:255|',
        'telp' => 'required|numeric',
        'nik' => 'required|numeric'
]);

    $pegawais = Pegawai::find($id)->update([
        'nama' => 'required|unique:pegawais|max:255|',
        'telp' => 'required|numeric',
        'nik' => 'required|numeric',
        'shift_id' => $request->shift_id
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Post Updated',
        'data'    => $pegawais
    ], 200);

}

public function destroy($id)
{
    $pegawais = Pegawai::find($id)->delete();
    return response()->json([
        'success' => true,
        'message' => 'Post Updated',
        'data'    => $pegawais
    ], 200);
}
}
