<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shift;
use App\Models\Pegawai;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::orderby('id', 'desc')->paginate(3);

        return view('shifts.index', compact('shifts'));
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

        return redirect('/shifts');
    }

    
    public function destroy($id)
    {
        Shift::find($id)->delete();
        return redirect('/shifts');
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
