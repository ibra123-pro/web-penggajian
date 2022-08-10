<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Jabatan;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan=\App\Models\Jabatan::All();
        return view('admin.datajabatan.jabatan',['jabatan'=>$jabatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.datajabatan.inputjabatan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_jabatan=new \App\Models\Jabatan;
        $tambah_jabatan->kd_jabatan = $request->addkdjabatan;
        $tambah_jabatan->nm_jabatan = $request->addnmjabatan;
        $tambah_jabatan->baypem = $request->addbaypem;
        $tambah_jabatan->baypen = $request->addbaypen;
        $tambah_jabatan->bayseh = $request->addbayseh;
        $tambah_jabatan->bayset = $request->addbayset;
        $tambah_jabatan->gapok = $request->addgapok;
        $tambah_jabatan->save();
        return redirect()->route('jabatan.index')->with('success', 'Data Berhasil Disimpan');
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
        $jabatan_edit=\App\Models\Jabatan::findOrFail($id);
        return view('admin/datajabatan.editjabatan',['jabatan' => $jabatan_edit]);
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
        $update_jabatan= \App\Models\Jabatan::findOrFail($id);
        $update_jabatan->kd_jabatan = $request->addkdjabatan;
        $update_jabatan->nm_jabatan = $request->addnmjabatan;
        $update_jabatan->gapok = $request->addgapok;
        $update_jabatan->save();
        return redirect()->route('jabatan.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_jabatan = \App\Models\Jabatan::findOrFail($id);
        $hapus_jabatan->delete();
        return redirect()->route( 'jabatan.index')->with('success', 'Data Berhasil Dihapus');
    }
}
