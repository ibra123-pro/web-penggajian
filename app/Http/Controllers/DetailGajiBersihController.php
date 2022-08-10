<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GajiBersih;
use App\Models\DetailGajiBersih;

class DetailGajiBersihController extends Controller
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
        ////Simpan ke table Gaji Bersih
        $tambah_gaber=new \App\Models\GajiBersih;
        $tambah_gaber->no_gaber = $request->no_gaber;        
        $tambah_gaber->tgl_gaber = $request->tgl_gaber;      
        $tambah_gaber->subgakot = $request->subgakot;
        $tambah_gaber->subbpjskeper = $request->subbpjskeper;
        $tambah_gaber->subbpjskekar = $request->subbpjskekar;
        $tambah_gaber->subbpjstkper = $request->subbpjstkper;
        $tambah_gaber->subbpjstkkar = $request->subbpjstkkar;
        $tambah_gaber->subgaber = $request->subgaber;
        $tambah_gaber->nik = $request->nik;
        $tambah_gaber->save();
        //SIMPAN DATA KE TABEL DETAIL
        $kdjabatan = $request->kd_jabatan;
        $gakot= $request->gakot;
        $bpjskeper= $request->bpjskeper;      
        $bpjskekar= $request->bpjskekar;
        $bpjstkper= $request->bpjstkper;
        $bpjstkkar= $request->bpjstkkar;   
        foreach($kdjabatan as $key => $no)
        {
            $input['no_gaber'] = $request->no_gaber;
            $input['kd_jabatan'] = $kdjabatan[$key];
            $input['gakot'] = $gakot[$key];
            $input['bpjskeper'] = $bpjskeper[$key];
            $input['bpjskekar'] = $bpjskekar[$key];
            $input['bpjstkper'] = $bpjstkper[$key];            
            $input['bpjstkkar'] = $bpjstkkar[$key];
            DetailGajiBersih::insert($input);
        }
        return redirect()->route('gajibersih.index')->with('success', 'Data Berhasil Disimpan');
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
