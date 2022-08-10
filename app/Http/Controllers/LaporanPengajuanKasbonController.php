<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasbon;
use PDF;

class LaporanPengajuanKasbonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasbon=\App\Models\Kasbon::All();
        return view('direkturutama.laporankasbon',['kasbon' => $kasbon]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $kasbon=\App\Models\Kasbon::All();
        $pdf = PDF::loadView('direkturutama.kasbon',['kasbon' => $kasbon])->setPaper('A4','landscape');
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
        $kasbon=\App\Models\Kasbon::All();
        $periode=$request->get('periode');
        $jenis=$request->get('jenis');
        if($jenis=='kasbon')
        {
            if($periode == 'All')
            {
                $kasbon = \App\Models\Kasbon::All();
                $pdf = PDF::loadview('kasbon.kasbon_pdf',['kasbon'=>$kasbon])->setPaper('A4','landscape');
                return $pdf->stream();
            } 
            elseif($periode == 'periode'){
                $tglawal=$request->get('tglawal');
                $tglakhir=$request->get('tglakhir');
                $kasbon=DB::table('kasbon')
                ->whereBetween('tgl', [$tglawal,$tglakhir])
                ->orderby('tgl','ASC')
                ->get();
                $pdf = PDF::loadview('kasbon.kasbon_pdf',['kasbon'=>$kasbon])->setPaper('A4','landscape');
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
