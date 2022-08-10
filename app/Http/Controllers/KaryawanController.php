<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Jabatan;
use App\Models\Karyawan;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $karyawan=\App\Models\Karyawan::All();
        return view('admin/datakaryawan.karyawan' ,['karyawan' => $karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan=\App\Models\Jabatan::All();
        return view('admin/datakaryawan.inputkaryawan' ,['jabatan' => $jabatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_karyawan=new \App\Models\Karyawan;
        $tambah_karyawan->nik = $request->addnik;
        $tambah_karyawan->nm_karyawan = $request->addnmkaryawan;
        $tambah_karyawan->kd_jabatan = $request->addkdjabatan;
        $tambah_karyawan->tunjangan = $request->addtunjangan;
        $tambah_karyawan->jk = $request->addjk;
        $tambah_karyawan->tgl_lahir = $request->addtgllahir;
        $tambah_karyawan->agama = $request->addagama;
        $tambah_karyawan->alamat = $request->addalamat;
        $tambah_karyawan->telepon = $request->addtelepon;
        $tambah_karyawan->save();
        return redirect()->route('karyawan.index')->with('success', 'Data Berhasil Disimpan');
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
        $jabatan=\App\Models\Jabatan::All();
        $karyawan_edit=\App\Models\Karyawan::findOrFail($id);
        return view('admin.datakaryawan.editkaryawan',['jabatan' => $jabatan, 'karyawan' => $karyawan_edit]);
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
        $update_karyawan = \App\Models\Karyawan::findOrFail($id);
        $update_karyawan->nik = $request->addnik;
        $update_karyawan->nm_karyawan = $request->addnmkaryawan;
        $update_karyawan->kd_jabatan = $request->addkdjabatan;
        $update_karyawan->jk = $request->addjk;
        $update_karyawan->tgl_lahir = $request->addtgllahir;
        $update_karyawan->agama = $request->addagama;
        $update_karyawan->alamat = $request->addalamat;
        $update_karyawan->telepon = $request->addtelepon;
        $update_karyawan->save();
        return redirect()->route( 'karyawan.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_karyawan = \App\Models\Karyawan::findOrFail($id);
        $hapus_karyawan->delete();
        return redirect()->route( 'karyawan.index')->with('success', 'Data Berhasil Dihapus');
    }
}
