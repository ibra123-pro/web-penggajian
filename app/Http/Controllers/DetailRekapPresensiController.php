<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapPresensi;
use App\Models\DetailRekapPresensi;

class DetailRekapPresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_presensi=new \App\Models\RekapPresensi;
        $tambah_presensi->no_rekpres = $request->no_rekpres;        
        $tambah_presensi->tgl_rekpres = $request->tgl_rekpres;
        $tambah_presensi->totalseh = $request->totalseh;
        $tambah_presensi->totalset = $request->totalset;
        $tambah_presensi->totalmas = $request->totalmas;
        $tambah_presensi->nik = $request->nik;
        $tambah_presensi->save();
        //SIMPAN DATA KE TABEL DETAIL
        $kdjabatan = $request->kd_jabatan;
        $totseh= $request->totseh;      
        $totset= $request->totset;
        $subseh= $request->sub_seh;      
        $subset= $request->sub_set;
        foreach($kdjabatan as $key => $no)
        {
            $input['no_rekpres'] = $request->no_rekpres;
            $input['kd_jabatan'] = $kdjabatan[$key];
            $input['totseh'] = $totseh[$key];
            $input['totset'] = $totset[$key];            
            $input['subseh'] = $subseh[$key];
            $input['subset'] = $subset[$key];
            DetailRekapPresensi::insert($input);
        }
        return redirect()->route('rekappresensi.index')->with('success', 'Data Berhasil Disimpan');
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
        //
    }
}
