<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;
use App\Models\Pegawai;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Data Piket',
            'data' => $shifts,
        ], 200);
    }


    public function create()
    {
        return view('shifts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:shifts|max:255|',
            'description' => 'required'
        ]);

        $shifts = new Shift;

        $shifts->name = $request->name;
        $shifts->description = $request->description;

        $shifts->save();

        return redirect('/shifts');
    }

    public function show($id)
    {
        $shift = Shift::where('id', $id)->first();
       
        return view('shitfs.show', ['shift' => $shift]);
    
        $shift = Shifts::where('id', $id)->first();
    
        return response()->json([
            'success' => true,
            'message' => 'Deskripsi Piket',
            'data'    => $shift
        ], 200);
    }

    public function edit($id)
    {
        $shift = Shift::where('id', $id)->first();
       
        return view('shifts.edit', ['shift' => $shift]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:shifts|max:255|',
            'description' => 'required'
        ]);

        shift::find($id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        $shiftu = Shift::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $shiftu
        ], 200);

        return redirect('/shifts');
    }

    public function destroy($id)
    {
        Shift::find($id)->delete();
        return redirect('/shifts');

        $shiftd = Shift::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Jadwal Dihapus',
            'data'    => $shiftd
        ], 200);
    }

    public function addpegawai($id)
    {
        $pegawai = Pegawai::where('shift_id' , '=' , 0)->get();
        $shift = Shift::where('id', $id)->first();
        return view('shifts.addpegawai', ['shift' => $shift, 'pegawai' => $pegawai]);
    }

    public function updatepegawai(Request $request, $id)
    {
        $pegawai = Pegawai::where('id', $request->pegawai_id)->first();
        Pegawai::find($pegawai->$id)->update([
            'shift_id'  => $id
        ]);
            return redirect('/shifts');
    }

    public function deletepegawai(Request $request, $id)
    {
        Pegawai::find($id)->update([
            'shift_id'  => 0
        ]);
            return redirect('/shifts');
    }
}