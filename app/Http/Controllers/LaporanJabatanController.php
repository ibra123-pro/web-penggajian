<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;
use PDF;

class LaporanJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan=\App\Models\Jabatan::All();
        return view('direkturutama.laporandatajabatan',['jabatan' => $jabatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan=\App\Models\Jabatan::All();
        $pdf = PDF::loadView('direkturutama.jabatan',['jabatan' => $jabatan])->setPaper('A4','landscape');
        return $pdf->stream();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $periode=$request->get('periode');
        $jenis=$request->get('jenis');
        if($jenis=='jabatan')
        {
            if($periode == 'All')
            {
                $jbt = \App\Models\Jabatan::All();
                $pdf = PDF::loadview('jabatan.jabatan_pdf',['jabatan'=>$jbt])->setPaper('A4','landscape');
                return $pdf->stream();
            } 
            elseif($periode == 'periode'){
                $tglawal=$request->get('tglawal');
                $tglakhir=$request->get('tglakhir');
                $bb=DB::table('jabatan')
                ->whereBetween('tgltran', [$tglawal,$tglakhir])
                ->orderby('tgltran','ASC')
                ->get();
                $pdf = PDF::loadview('jabatan.jabatan_pdf',['jabatan'=>$bb])->setPaper('A4','landscape');
                return $pdf->stream(); 
            }
        }
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
