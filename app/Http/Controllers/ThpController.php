<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\Jurnal;
use App\Models\Thp;
use App\Models\TempThp;
use App\Models\ViewThp;
use App\Models\UpdateKasbon;
use App\Models\GajiBersih;
use App\Models\TempGajiBersih;
use App\Models\ViewGajiBersih;

class ThpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thp=\App\Models\Thp::All();
        return view('admin.datagaji.thp',['thp'=>$thp]);
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
        $thp=\App\Models\Thp::All();
        $tempthp=\App\Models\TempThp::All();
        $viewthp=\App\Models\ViewThp::All();  
        $updatekasbon=\App\Models\UpdateKasbon::All();
        $gajibersih=\App\Models\GajiBersih::All();
        $tempgajibersih=\App\Models\TempGajiBersih::All();
        $viewgajibersih=\App\Models\ViewGajiBersih::All();  
        $AWAL = 'TP';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\Thp::max('no_thp');
        $no = 1;
        $formatnya=sprintf("%03s", abs((int)$noUrutAkhir + 1)). '-' . $AWAL .'-' . $bulanRomawi[date('n')] .'-' . date('Y');
        return view('admin.datagaji.inputthp' ,['jabatan' => $jabatan, 'karyawan' => $karyawan, 'thp' => $thp, 'tempthp' => $tempthp, 'viewthp' => $viewthp, 'updatekasbon' => $updatekasbon,  'gajibersih' => $gajibersih, 'tempgajibersih' => $tempgajibersih, 'viewgajibersih' => $viewgajibersih, 'formatnya' => $formatnya]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (TempThp::where('kd_jabatan', $request->kd_jabatan)->exists()) {
            TempThp::where('gaber', $request->gaber)->update(['gaber' => $request->gaber]);
            TempThp::where('kasbon', $request->kasbon)->update(['kasbon' => $request->kasbon]);
            return redirect()->route('thp.create');
        }else{
            TempThp::create([   
                'gaber' => $request->gaber,           
                'kasbon' => $request->kasbon,
                'kd_jabatan' => $request->kd_jabatan,  
                'no_upkas' => $request->no_upkas,
                'no_gaber' => $request->no_gaber
            ]);
        return redirect()->route('thp.create');
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
        $hapus = \App\Models\TempThp::findOrFail($id);
        $hapus->delete();
        return redirect()->route('thp.create')->with('success', 'Data Berhasil Dihapus');
    }
}
