<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapKabon;
use App\Models\Karyawan;

class RekapkasbonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekapkasbon=\App\Models\RekapKasbon::All();
        return view('admin.datakasbon.rekapkasbon' ,['rekapkasbon' => $rekapkasbon]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        $karyawan=\App\Models\Karyawan::All();
        $rekapkasbon=\App\Models\RekapKasbon::All();
        $AWAL = 'RK';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\RekapKasbon::max('no_rekkas');
        $no = 1;
        $formatnya=sprintf("%03s", abs((int)$noUrutAkhir + 1)). '-' . $AWAL .'-' . $bulanRomawi[date('n')] .'-' . date('Y');
        return view('admin.datakasbon.inputrekapkasbon' ,['karyawan' => $karyawan , 'rekapkasbon' => $rekapkasbon, 'formatnya' => $formatnya]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_rekap_kasbon=new \App\Models\RekapKasbon;
        $tambah_rekap_kasbon->no_rekkas = $request->no_rekkas;
        $tambah_rekap_kasbon->tgl_rekkas = $request->tgl_rekkas;
        $tambah_rekap_kasbon->totpen = $request->totpen;
        $tambah_rekap_kasbon->baykas = $request->baykas;
        $tambah_rekap_kasbon->nik = $request->nik;
        $tambah_rekap_kasbon->save();
        return redirect()->route('rekapkasbon.index')->with('success', 'Data Berhasil Disimpan');
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
        $hapus_rekap = \App\Models\RekapKasbon::findOrFail($id);
        $hapus_rekap->delete();
        return redirect()->route('rekapkasbon.index')->with('success', 'Data Berhasil Dihapus');
    }
}
