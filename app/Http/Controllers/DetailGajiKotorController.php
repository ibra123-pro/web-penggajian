<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GajiKotor;
use App\Models\DetailGajiKotor;

class DetailGajiKotorController extends Controller
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
        //Simpan ke table Gaji Kotor
        $tambah_gakot=new \App\Models\GajiKotor;
        $tambah_gakot->no_gakot = $request->no_gakot;        
        $tambah_gakot->tgl_gakot = $request->tgl_gakot;      
        $tambah_gakot->subgapok = $request->subgapok;
        $tambah_gakot->subpen = $request->subpen;
        $tambah_gakot->subrew = $request->subrew;
        $tambah_gakot->subtotal = $request->subtotal;
        $tambah_gakot->subtunjangan = $request->subtunjangan;
        $tambah_gakot->submas = $request->submas;
        $tambah_gakot->subgakot = $request->subgakot;
        $tambah_gakot->nik = $request->nik;
        $tambah_gakot->save();
        //SIMPAN DATA KE TABEL DETAIL
        $kdjabatan = $request->kd_jabatan;
        $gapok= $request->gapok;
        $totalpen= $request->totalpen;      
        $totalrew= $request->totalrew;
        $total= $request->total;
        $tunjangan= $request->tunjangan;      
        $totalmas= $request->totalmas; 
        foreach($kdjabatan as $key => $no)
        {
            $input['no_gakot'] = $request->no_gakot;
            $input['kd_jabatan'] = $kdjabatan[$key];
            $input['gapok'] = $gapok[$key];
            $input['totalpen'] = $totalpen[$key];
            $input['totalrew'] = $totalrew[$key];
            $input['total'] = $totalpen[$key];            
            $input['tunjangan'] = $tunjangan[$key];
            $input['totalmas'] = $totalmas[$key]; 
            DetailGajiKotor::insert($input);
        }
        return redirect()->route('gajikotor.index')->with('success', 'Data Berhasil Disimpan');
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
