<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thp;
use App\Models\DetailThp;

class DetailThpController extends Controller
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
        //Simpan ke table THP
        $tambah_thp=new \App\Models\Thp;
        $tambah_thp->no_thp = $request->no_thp;        
        $tambah_thp->tgl_thp = $request->tgl_thp;      
        $tambah_thp->subgaber = $request->subgaber;
        $tambah_thp->subkasbon = $request->subkasbon;
        $tambah_thp->subbaykas = $request->subbaykas;
        $tambah_thp->subsiskas = $request->subsiskas;
        $tambah_thp->subthp = $request->subthp;
        $tambah_thp->nik = $request->nik;
        $tambah_thp->save();
        //SIMPAN DATA KE TABEL DETAIL
        $kdjabatan = $request->kd_jabatan;
        $gaber= $request->gaber;
        $kasbon= $request->kasbon;   
        foreach($kdjabatan as $key => $no)
        {
            $input['no_thp'] = $request->no_thp;
            $input['kd_jabatan'] = $kdjabatan[$key];
            $input['gaber'] = $gaber[$key];
            $input['kasbon'] = $kasbon[$key];
            DetailThp::insert($input);
        }
        return redirect()->route('thp.index')->with('success', 'Data Berhasil Disimpan');
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
