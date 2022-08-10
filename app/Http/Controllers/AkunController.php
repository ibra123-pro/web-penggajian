<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Akun;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun=\App\Models\Akun::All();
        return view('datasetting.akun',['akun'=>$akun]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasetting.inputakun');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_akun=new \App\Models\Akun;
        $tambah_akun->no_akun = $request->addnoakun;
        $tambah_akun->nm_akun = $request->addnmakun;
        $tambah_akun->save(); 
        return redirect()->route('akun.index')->with('success', 'Data Berhasil Disimpan');
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
        $akun_edit=\App\Models\Akun::findOrFail($id);
        return view('datasetting.editakun',['akun' => $akun_edit]);
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
        $edit_akun= \App\Models\Akun::findOrFail($id);
        $edit_akun->no_akun = $request->addnoakun;
        $edit_akun->nm_akun = $request->addnmakun;
        $edit_akun->save(); 
        return redirect()->route('akun.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_akun = \App\Models\Akun::findOrFail($id);
        $hapus_akun->delete();
        return redirect()->route( 'akun.index')->with('success', 'Data Berhasil Dihapus');
    }
}
