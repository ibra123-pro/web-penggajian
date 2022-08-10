<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Paket;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket=\App\Models\Paket::All();
        return view('paket.paket',['paket'=>$paket]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket.inputpaket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_paket=new \App\Models\Paket;
        $tambah_paket->id_paket = $request->addidpaket;
        $tambah_paket->nm_paket = $request->addnmpaket;
        $tambah_paket->harga = $request->addharga;
        $tambah_paket->save();
        return redirect()->route('paket.index')->with('success', 'Data Berhasil Disimpan');
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
        $paket_edit=\App\Models\Paket::findOrFail($id);
        return view('paket.editpaket',['paket' => $paket_edit]);
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
        $update_paket= \App\Models\Paket::findOrFail($id);
        $update_paket->id_paket = $request->addidpaket;
        $update_paket->nm_paket = $request->addnmpaket;
        $update_paket->harga = $request->addharga;
        $update_paket->save();
        return redirect()->route('paket.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_paket = \App\Models\Paket::findOrFail($id);
        $hapus_paket->delete();
        return redirect()->route( 'paket.index')->with('success', 'Data Berhasil Dihapus');
    }
}
