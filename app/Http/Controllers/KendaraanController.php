<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kendaraan;

class KendaraanController extends Controller
{
    public function index (){
        $kendaraanData = Kendaraan :: all();
        
        return view('pages.kendaraan.index', compact('kendaraanData'));
    }

    public function create() {
        return view('pages.kendaraan.create');
    }

    public function store(Request $request) {
        $rules = [
            'nomor_plat_kendaraan' => 'required',
            'merk_kendaraan' => 'required',
            'tipe_kendaraan' => 'required',
        ];
        $message = [
            'required'=> 'Form :attribute tidak boleh kosong!'
        ];
        $this -> validate($request, $rules, $message);
        
        Kendaraan :: create([
            'nomor_plat_kendaraan' => $request->nomor_plat_kendaraan,
            'merk_kendaraan' => $request->merk_kendaraan,
            'tipe_kendaraan' => $request->tipe_kendaraan,

        ]);
        return redirect() -> route('kendaraan.index');

    }

    public function edit($id){
        $kendaraan = Kendaraan :: findOrFail($id);

        return view('pages.kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $id){
        $rules = [
            'nomor_plat_kendaraan' => 'required',
            'merk_kendaraan' => 'required',
            'tipe_kendaraan' => 'required',
        ];
        $message = [
            'required'=> 'Form :attribute tidak boleh kosong!'
        ];
        $this -> validate($request, $rules, $message);
        
        $kendaraan = Kendaraan :: findOrFail($id);

        $kendaraan->update([
            'nomor_plat_kendaraan' => $request->nomor_plat_kendaraan,
            'merk_kendaraan' => $request->merk_kendaraan,
            'tipe_kendaraan' => $request->tipe_kendaraan,
        ]);
        return redirect() -> route('kendaraan.index');

    }

    public function destroy($id){
        $kendaraan = Kendaraan :: findOrFail($id);

        $kendaraan->delete();

        return redirect() -> route('kendaraan.index');
    }
}
