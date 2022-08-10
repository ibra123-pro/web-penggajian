<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use App\Models\Jurnal;
use App\Models\Thp;
use DB;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurnal=\App\Models\Jurnal::All();
        return view( 'datasetting.jurnal' , ['jurnal' => $jurnal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $akun = \App\Models\Akun::All();
        $thp = \App\Models\Thp::All();
        return view('datasetting.inputjurnal',['akun'=>$akun, 'thp'=>$thp]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_kk = new \App\Models\Jurnal;
        $save_kk->no_jurnal=$request->get('notrans');
        $save_kk->tgl_jurnal=$request->get('tgltr');
        $save_kk->no_thp=$request->get('no_thp');
        $save_kk->keterangan=$request->get('memo');
        $save_kk->debet=$request->get('total'); 
        $save_kk->kredit=$request->get('totals'); 
        $save_kk->save(); 
        return redirect()->route( 'jurnal.index' )->with('success', 'Data Berhasil Disimpan');
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
        $jurnal = \App\Models\Jurnal::findOrFail($id);
        $jurnal->delete();
        return redirect()->route( 'jurnal.index')->with('success', 'Data Berhasil Dihapus');
    }
}
