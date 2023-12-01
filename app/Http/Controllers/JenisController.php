<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JenisController extends Controller
{
    public function index() {
        $datas = DB::table('jenis')->get();

        return view('jenis.index')->with('datas', $datas);
    }

    public function create() {
        return view('jenis.create');
    }

    public function store(Request $request) {
        $request->validate([
            'id_jenis' => 'required',
            'jenis' => 'required'
        ]);

        DB::table('jenis')->insert([
            'id_jenis' => $request->id_jenis,
            'jenis' => $request->jenis
        ]);

        return redirect()->route('jenis.index')->with('success', 'Saved Successfully');
    }

    public function edit($id) {
        $data = DB::table('jenis')->where('id_jenis', $id)->first();

        return view('jenis.edit')->with('data', $data);
    }

    public function update($id, Request $request) {
        $request->validate([
            'id_jenis' => 'required',
            'jenis' => 'required'
        ]);

        DB::table('jenis')
            ->where('id_jenis', $id)
            ->update([
                'id_jenis' => $request->id_jenis,
                'jenis' => $request->jenis
            ]);

        return redirect()->route('jenis.index')->with('success', 'Changed Successfully');
    }

    public function delete($id) {
        DB::table('jenis')->where('id_jenis', $id)->delete();

        return redirect()->route('jenis.index')->with('success', 'Deleted Successfully');
    }
}
