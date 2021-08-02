<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;


class PegawaiController extends Controller
{
        public function index()
        {
            $pegawais = Pegawai::orderby('id', 'desc')->paginate(3);
    
            return view('pegawais.index', compact('pegawais'));
        }
        public function create()
        {
            return view('pegawais.create');
        }
        public function store(Request $request)
        {
            
            $request->validate([
                'nama' => 'required|unique:pegawais|max:255|',
                'telp' => 'required|numeric',
                'nik' => 'required|numeric'
            ]);
    
            $pegawais = new Pegawai;
    
            $pegawais->nama = $request->nama;
            $pegawais->telp = $request->telp;
            $pegawais->nik = $request->nik;
    
            $pegawais->save();
    
            return redirect('/');
        }
    
        public function show($id)
        {
            $pegawai = Pegawai::where('id', $id)->first();
           
            return view('pegawais.show', ['pegawai' => $pegawai]);
        }
    
        public function edit($id)
        {
            $pegawai = Pegawai::where('id', $id)->first();
           
            return view('pegawais.edit', ['pegawai' => $pegawai]);
        }
    
        public function update(Request $request, $id)
        {
            $request->validate([
                'nama' => 'required|unique:pegawais|max:255|',
                'telp' => 'required|numeric',
                'nik' => 'required|numeric'
            ]);
    
            pegawai::find($id)->update([
                'nama' => $request->nama,
                'telp' => $request->telp,
                'nik' => $request->nik
            ]);
    
            return redirect('/');
        }
    
        public function destroy($id)
        {
            Pegawai::find($id)->delete();
            return redirect('/');
        }
    }