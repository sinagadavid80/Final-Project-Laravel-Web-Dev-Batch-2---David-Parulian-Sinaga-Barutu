<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ddata_guru;

class gurucontroller extends Controller
{
    
    public function formCreate()
    {
        return view ('gurru/gurru-formtambah');
    }

    public function savedata(Request $request)
    {
        // return $request->all();
        
        $guru = new ddata_guru;
        $guru->nama_lengkap = $request->nama_lengkap;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->alamat = $request->alamat;
        $guru->mata_pelajaran = $request->mata_pelajaran;
        $guru->gambar = $request->gambar;
        $guru->save();
        
        // echo "Data Guru Tersimpan disini";
        return redirect('/');
    }
    
// -------------------------------------------------------------------------------------------------------------------
    public function editdata($id)
    {
        $guru = ddata_guru::find($id);
        return view ('gurru/gurru-formedit', compact('guru'));
    }

    public function updatedata(Request $request, $id)
    {
        // return $request->all();
        
        $guru = ddata_guru::find($id);
        $guru->nama_lengkap = $request->nama_lengkap;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->alamat = $request->alamat;
        $guru->mata_pelajaran = $request->mata_pelajaran;
        $guru->gambar = $request->gambar;
        $guru->save();
        
        // echo "Data Guru Tersimpan disini";
        return redirect('/');
    }

// -----------------------------------------------------------------------------------------------------------------------------    

    public function deletedata($id)
    {
        $guru = ddata_guru::find($id)->id;
        return redirect ('/');
    }

}