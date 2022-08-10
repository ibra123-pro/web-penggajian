<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapCostumer;
use App\Models\RekapKasbon;
use App\Models\RekapPemasangan;
use App\Models\RekapPresensi;
use PDF;
use DB;

class CetakRekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $periode=$request->get('periode');
        $jenis=$request->get('jenis');
        if($jenis=='rekapcostumer')
        {
            if($periode == 'All')
            {
                $rekapcostumer=\App\Models\RekapCostumer::All();
                $pdf = PDF::loadView('direkturutama.rekapcostumer',['rekapcostumer' => $rekapcostumer])->setPaper('A4','landscape');
                return $pdf->stream();
            }
            elseif($periode == 'periode'){
                $tglawal=$request->get('tglawal');
                $tglakhir=$request->get('tglakhir');
                $rekapcostumer=DB::table('rekap_costumer')
                ->whereBetween('tgl_rekcos', [$tglawal,$tglakhir])
                ->orderby('tgl_rekcos','ASC')
                ->get();
                $pdf = PDF::loadView('direkturutama.rekapcostumer',['rekapcostumer' => $rekapcostumer])->setPaper('A4','landscape');
                return $pdf->stream();
            }
        }
        elseif($jenis=='rekapkasbon')
        {
            if($periode == 'All')
            {
                $rekapkasbon=\App\Models\RekapKasbon::All();
                $pdf = PDF::loadView('direkturutama.rekapkasbon',['rekapkasbon' => $rekapkasbon])->setPaper('A4','landscape');
                return $pdf->stream();
            }
            elseif($periode == 'periode'){
                $tglawal=$request->get('tglawal');
                $tglakhir=$request->get('tglakhir');
                $rekapkasbon=DB::table('rekap_kasbon')
                ->whereBetween('tgl_rekkas', [$tglawal,$tglakhir])
                ->orderby('tgl_rekkas','ASC')
                ->get();
                $pdf = PDF::loadView('direkturutama.rekapkasbon',['rekapkasbon' => $rekapkasbon])->setPaper('A4','landscape');
                return $pdf->stream();
            }
        }
        elseif($jenis=='rekappemasangan')
        {
            if($periode == 'All')
            {
                $rekappemasangan=\App\Models\RekapPemasangan::All();
                $pdf = PDF::loadView('direkturutama.rekappemasangan',['rekappemasangan' => $rekappemasangan])->setPaper('A4','landscape');
                return $pdf->stream();
            }
            elseif($periode == 'periode'){
                $tglawal=$request->get('tglawal');
                $tglakhir=$request->get('tglakhir');
                $rekappemasangan=DB::table('rekap_pemasangan')
                ->whereBetween('tgl_rekmas', [$tglawal,$tglakhir])
                ->orderby('tgl_rekmas','ASC')
                ->get();
                $pdf = PDF::loadView('direkturutama.rekappemasangan',['rekappemasangan' => $rekappemasangan])->setPaper('A4','landscape');
                return $pdf->stream();
            }
        }
        elseif($jenis=='rekappresensi')
        {
            if($periode == 'All')
            {
                $rekappresensi=\App\Models\RekapPresensi::All();
                $pdf = PDF::loadView('direkturutama.rekappresensi',['rekappresensi' => $rekappresensi])->setPaper('A4','landscape');
                return $pdf->stream();
            }
            elseif($periode == 'periode'){
                $tglawal=$request->get('tglawal');
                $tglakhir=$request->get('tglakhir');
                $rekappresensi=DB::table('rekap_presensi')
                ->whereBetween('tgl_rekpres', [$tglawal,$tglakhir])
                ->orderby('tgl_rekpres','ASC')
                ->get();
                $pdf = PDF::loadView('direkturutama.rekappresensi',['rekappresensi' => $rekappresensi])->setPaper('A4','landscape');
                return $pdf->stream();
            }
        }
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
