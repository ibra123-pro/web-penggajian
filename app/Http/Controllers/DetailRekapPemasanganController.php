<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapPemasangan;
use App\Models\DetailRekapPemasangan;

class DetailRekapPemasanganController extends Controller
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
        //Simpan ke table rekap pemasangan
        $tambah_pemasangan=new \App\Models\RekapPemasangan;
        $tambah_pemasangan->no_rekmas = $request->no_rekmas;        
        $tambah_pemasangan->tgl_rekmas = $request->tgl_rekmas;
        $tambah_pemasangan->total = $request->total;
        $tambah_pemasangan->nik = $request->nik;
        $tambah_pemasangan->save();
        //SIMPAN DATA KE TABEL DETAIL
        $kdjabatan = $request->kd_jabatan;
        $totpem= $request->totpem;
        $subtotal= $request->sub_total;
        foreach($kdjabatan as $key => $no)
        {
            $input['no_rekmas'] = $request->no_rekmas;
            $input['kd_jabatan'] = $kdjabatan[$key];
            $input['totpem'] = $totpem[$key];
            $input['subtotal'] = $subtotal[$key];
            DetailRekapPemasangan::insert($input);
        }
        return redirect()->route('rekappemasangan.index')->with('success', 'Data Berhasil Disimpan');
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
