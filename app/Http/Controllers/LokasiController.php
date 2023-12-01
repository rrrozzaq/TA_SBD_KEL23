<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LokasiController extends Controller
{
    public function index()
    {
        $datas = DB::table('lokasi')->get();
        return view('lokasi.index')->with('datas', $datas);
    }

    public function create()
    {
        return view('lokasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_lokasi' => 'required',
            'alamat' => 'required'
        ]);

        DB::table('lokasi')->insert([
            'id_lokasi' => $request->id_lokasi,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('lokasi.index')->with('success', 'Saved Successfully');
    }

    public function edit($id)
    {
        $data = DB::table('lokasi')->where('id_lokasi', $id)->first();
        return view('lokasi.edit')->with('data', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'id_lokasi' => 'required',
            'alamat' => 'required'
        ]);
       
        DB::table('lokasi')
            ->where('id_lokasi', $id)
            ->update([
                'id_lokasi' => $request->id_lokasi,
                'alamat' => $request->alamat
            ]);

        return redirect()->route('lokasi.index')->with('success', 'Changed Successfully');
    }

    public function delete($id)
    {
    
        DB::table('lokasi')->where('id_lokasi', $id)->delete();
    
        return redirect()->route('lokasi.index')->with('success', 'Deleted Successfully');
    }
    
}