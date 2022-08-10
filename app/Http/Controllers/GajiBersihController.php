<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\GajiBersih;
use App\Models\TempGajiBersih;
use App\Models\ViewGajiBersih;
use App\Models\GajiKotor;
use App\Models\TempGajiKotor;
use App\Models\ViewGajiKotor;

class GajiBersihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gaji_bersih=\App\Models\GajiBersih::All();
        return view('admin.datagaji.gajibersih',['gajibersih'=>$gaji_bersih]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan=\App\Models\Jabatan::All();     
        $karyawan=\App\Models\Karyawan::All();
        $gajibersih=\App\Models\GajiBersih::All();
        $tempgajibersih=\App\Models\TempGajiBersih::All();
        $viewgajibersih=\App\Models\ViewGajiBersih::All();   
        $gajikotor=\App\Models\GajiKotor::All();
        $tempgajikotor=\App\Models\TempGajiKotor::All();
        $viewgajikotor=\App\Models\ViewGajiKotor::All();
        $AWAL = 'GB';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\GajiBersih::max('no_gaber');
        $no = 1;
        $formatnya=sprintf("%03s", abs((int)$noUrutAkhir + 1)). '-' . $AWAL .'-' . $bulanRomawi[date('n')] .'-' . date('Y');
        return view('admin.datagaji.inputgajibersih' ,['jabatan' => $jabatan, 'karyawan' => $karyawan, 'gajibersih' => $gajibersih, 'tempgajibersih' => $tempgajibersih, 'viewgajibersih' => $viewgajibersih, 'gajikotor' => $gajikotor, 'tempgajikotor' => $tempgajikotor, 'viewgajikotor' => $viewgajikotor,  'formatnya' => $formatnya]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (TempGajiBersih::where('kd_jabatan', $request->kd_jabatan)->exists()) {
            TempGajiBersih::where('gakot', $request->gakot)->update(['gakot' => $request->gakot]);
            TempGajiBersih::where('bpjskeper', $request->bpjskeper)->update(['bpjskeper' => $request->bpjskeper]);
            TempGajiBersih::where('bpjskekar', $request->bpjskekar)->update(['bpjskekar' => $request->bpjskekar]);
            TempGajiBersih::where('bpjstkper', $request->bpjstkper)->update(['bpjstkper' => $request->bpjstkper]);
            TempGajiBersih::where('bpjstkkar', $request->bpjstkkar)->update(['bpjstkkar' => $request->bpjstkkar]);
            return redirect()->route('gajibersih.create');
        }else{
            TempGajiBersih::create([   
                'gakot' => $request->gakot,           
                'bpjskeper' => $request->bpjskeper,
                'bpjskekar' => $request->bpjskekar,
                'bpjstkper' => $request->bpjstkper,
                'bpjstkkar' => $request->bpjstkkar,
                'kd_jabatan' => $request->kd_jabatan,  
                'no_gakot' => $request->no_gakot
            ]);
        return redirect()->route('gajibersih.create');
        }
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
        $hapus = \App\Models\TempGajiBersih::findOrFail($id);
        $hapus->delete();
        return redirect()->route('gajibersih.create')->with('success', 'Data Berhasil Dihapus');
    }
}
