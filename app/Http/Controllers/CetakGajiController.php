<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GajiKotor;
use App\Models\GajiBersih;
use App\Models\Thp;
use PDF;
use DB;

class CetakGajiController extends Controller
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
        if($jenis=='gajikotor')
        {
            if($periode == 'All')
            {
                $gajikotor=\App\Models\GajiKotor::All();
                $pdf = PDF::loadView('direkturutama.gajikotor',['gajikotor' => $gajikotor])->setPaper('legal','landscape');
                return $pdf->stream();
            }
            elseif($periode == 'periode'){
                $tglawal=$request->get('tglawal');
                $tglakhir=$request->get('tglakhir');
                $gajikotor=DB::table('gaji_kotor')
                ->whereBetween('tgl_gakot', [$tglawal,$tglakhir])
                ->orderby('tgl_gakot','ASC')
                ->get();
                $pdf = PDF::loadView('direkturutama.gajikotor',['gajikotor' => $gajikotor])->setPaper('legal','landscape');
                return $pdf->stream();
            }
        }
        elseif($jenis=='gajibersih')
        {
            if($periode == 'All')
            {
                $gajibersih=\App\Models\GajiBersih::All();
                $pdf = PDF::loadView('direkturutama.gajibersih',['gajibersih' => $gajibersih])->setPaper('legal','landscape');
                return $pdf->stream();
            }
            elseif($periode == 'periode'){
                $tglawal=$request->get('tglawal');
                $tglakhir=$request->get('tglakhir');
                $gajibersih=DB::table('gaji_bersih')
                ->whereBetween('tgl_gaber', [$tglawal,$tglakhir])
                ->orderby('tgl_gaber','ASC')
                ->get();
                $pdf = PDF::loadView('direkturutama.gajibersih',['gajibersih' => $gajibersih])->setPaper('legal','landscape');
                return $pdf->stream();
            }
        }
        elseif($jenis=='thp')
        {
            if($periode == 'All')
            {
                $thp=\App\Models\Thp::All();
                $pdf = PDF::loadView('direkturutama.thp',['thp' => $thp])->setPaper('legal','landscape');
                return $pdf->stream();
            }
            elseif($periode == 'periode'){
                $tglawal=$request->get('tglawal');
                $tglakhir=$request->get('tglakhir');
                $thp=DB::table('thp')
                ->whereBetween('tgl_thp', [$tglawal,$tglakhir])
                ->orderby('tgl_thp','ASC')
                ->get();
                $pdf = PDF::loadView('direkturutama.thp',['thp' => $thp])->setPaper('legal','landscape');
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
