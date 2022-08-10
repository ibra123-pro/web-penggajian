<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Karyawan;
use App\Models\UpdateKasbon;

class UpdateKasbonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updatekasbon=\App\Models\UpdateKasbon::All();
        return view('admin.datakasbon.updatekasbon' ,['updatekasbon' => $updatekasbon]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan=\App\Models\Karyawan::All();     
        return view('admin.datakasbon.inputupdatekasbon' ,['karyawan' => $karyawan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_update_kasbon=new \App\Models\UpdateKasbon;
        $tambah_update_kasbon->no_upkas = $request->no_upkas;
        $tambah_update_kasbon->nik = $request->nik;
        $tambah_update_kasbon->totpen = $request->totpen;
        $tambah_update_kasbon->baykas = $request->baykas;
        $tambah_update_kasbon->save();
        return redirect()->route('updatekasbon.index')->with('success', 'Data Berhasil Disimpan');
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
        $karyawan=\App\Models\Karyawan::All();
        $updatekasbon=\App\Models\UpdateKasbon::findOrFail($id);
        return view('admin.datakasbon.editupdatekasbon',['karyawan' => $karyawan, 'updatekasbon' => $updatekasbon]);
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
        $edit_update_kasbon= \App\Models\UpdateKasbon::findOrFail($id);
        $edit_update_kasbon->no_upkas = $request->no_upkas;
        $edit_update_kasbon->nik = $request->nik;
        $edit_update_kasbon->totpen = $request->totpen;
        $edit_update_kasbon->baykas = $request->baykas;
        $edit_update_kasbon->save();
        return redirect()->route('updatekasbon.index')->with('success', 'Data Berhasil Diubah');
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
