<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Setting;
use App\Models\Akun;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun=\App\Models\Akun::All();         
        $setting=\App\Models\Setting::All();         
        return view('datasetting.setting' ,['akun' => $akun, 'setting'=> $setting]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasetting.inputsetting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_setting=new \App\Models\Setting;
        $tambah_setting->id_setting = $request->id_setting;
        $tambah_setting->no_akun = $request->no_akun;
        $tambah_setting->nama_transaksi = $request->nama_transaksi;
        $tambah_setting->save();
        return redirect()->route('setting.index')->with('success', 'Data Berhasil Disimpan');
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
        $setting_edit=\App\Models\Setting::findOrFail($id);
        return view('datasetting.editsetting',['setting' => $setting_edit]);
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
        $update_setting=\App\Models\Setting::findOrFail($id);
        $update_setting->id_setting = $request->id_setting;
        $update_setting->no_akun = $request->no_akun;
        $update_setting->nama_transaksi = $request->nama_transaksi;
        $update_setting->save();
        return redirect()->route('setting.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_setting = \App\Models\Setting::findOrFail($id);
        $hapus_setting->delete();
        return redirect()->route( 'setting.index')->with('success', 'Data Berhasil Dihapus');
    }
}
