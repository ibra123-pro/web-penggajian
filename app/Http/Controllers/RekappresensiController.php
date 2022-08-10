<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\RekapPresensi;
use App\Models\TempRekapPresensi;
use App\Models\ViewRekapPresensi;

class RekappresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekappresensi=\App\Models\RekapPresensi::All();
        return view('Presensi.rekappresensi' ,['rekappresensi' => $rekappresensi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan=\App\Models\Jabatan::All();        
        $karyawan=\App\Models\Karyawan::All();
        $rekappresensi=\App\Models\RekapPresensi::All();
        $temprekappresensi=\App\Models\TempRekapPresensi::All();
        $viewrekappresensi=\App\Models\ViewRekapPresensi::All();
        $AWAL = 'RP';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\RekapPresensi::max('no_rekpres');
        $no = 1;
        $formatnya=sprintf("%03s", abs((int)$noUrutAkhir + 1)). '-' . $AWAL .'-' . $bulanRomawi[date('n')] .'-' . date('Y');
        return view('Presensi.inputrekappresensi' ,['jabatan' => $jabatan, 'karyawan' => $karyawan , 'rekappresensi' => $rekappresensi, 'temprekappresensi' => $temprekappresensi, 'viewrekappresensi' => $viewrekappresensi, 'formatnya' => $formatnya]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        if (TempRekapPresensi::where('kd_jabatan', $request->kd_jabatan)->exists()) {
            TempRekapPresensi::where('totseh', $request->totseh)->update(['totseh' => $request->totseh]);
            TempRekapPresensi::where('totset', $request->totset)->update(['totset' => $request->totset]);
            return redirect()->route('rekappresensi.create');
        }else{
            TempRekapPresensi::create([
                'totseh' => $request->totseh,
                'totset' => $request->totset,
                'kd_jabatan' => $request->kd_jabatan
            ]);
        return redirect()->route('rekappresensi.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = \App\Models\TempRekapPresensi::findOrFail($id);
        $hapus->delete();
        return redirect()->route('rekappresensi.create')->with('success', 'Data Berhasil Dihapus');
    }
}
