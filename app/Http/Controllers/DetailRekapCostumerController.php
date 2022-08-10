<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapCostumer;
use App\Models\DetailRekapCostumer;

class DetailRekapCostumerController extends Controller
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
        //Simpan ke table rekap costumer
        $tambah_costumer=new \App\Models\Rekapcostumer;
        $tambah_costumer->no_rekcos = $request->no_rekcos;        
        $tambah_costumer->tgl_rekcos = $request->tgl_rekcos;
        $tambah_costumer->totalpen = $request->totalpen;
        $tambah_costumer->totalrew = $request->totalrew;
        $tambah_costumer->nik = $request->nik;
        $tambah_costumer->save();
        //SIMPAN DATA KE TABEL DETAIL
        $kdjabatan = $request->kd_jabatan;
        $totpen= $request->totpen;      
        $totrew= $request->totrew;
        $subpen= $request->sub_pen;      
        $subrew= $request->sub_rew;
        foreach($kdjabatan as $key => $no)
        {
            $input['no_rekcos'] = $request->no_rekcos;
            $input['kd_jabatan'] = $kdjabatan[$key];
            $input['totpen'] = $totpen[$key];
            $input['totrew'] = $totrew[$key];            
            $input['subpen'] = $subpen[$key];
            $input['subrew'] = $subrew[$key];
            DetailRekapCostumer::insert($input);
        }
        return redirect()->route('rekapcostumer.index')->with('success', 'Data Berhasil Disimpan');
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
