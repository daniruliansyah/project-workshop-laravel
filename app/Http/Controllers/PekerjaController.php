<?php

namespace App\Http\Controllers;

use App\Https\Models\Pekerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PekerjaController extends Controller{

    public function index() {
        $pekerja = DB::table('pekerja')->get();
        return view ('pekerja.index', compact('pekerja'));
    }

    public function create() {
        return view ('pekerja.create');
    }

    public function store(Request $request) {
        DB::table('pekerja')->insert([
            'nama_pekerja' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat_pekerja' => $request->alamat,
            'no_hp_pekerja' => $request->no_hp,
            'foto_pekerja' => $request->foto,
        ]);
        return redirect ('pekerja');
    }
    public function show(string $id): Response {
        dd('show');
    }
    public function edit(string $id) {
        $pekerja = DB::table('pekerja')->where('id_pekerja', $id)->first();
        return view ('pekerja.edit', compact('pekerja'));
        dd($pekerja);
    }
    public function update(Request $request, string $id) {
        DB::table('pekerja')->where('id_pekerja', $id)->update([
            'nama_pekerja' => $request->nama,
            'alamat_pekerja' => $request->alamat,
            'no_hp_pekerja' => $request->no_hp,
            'foto_pekerja' => $request->foto,
        ]);

        return redirect ('pekerja');
        //dd('update');
    }
    public function destroy(string $id) {
        DB::table('pekerja')->where('id_pekerja', $id)->delete();
        return redirect('pekerja');
    }
    
    public function art()
    {
        return view('pages/art');
    }

    public function baby()
    {
        return view('pages/babysitter');
    }
}