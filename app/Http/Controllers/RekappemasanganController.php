<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\RekapPemasangan;
use App\Models\TempRekapPemasangan;
use App\Models\ViewRekapPemasangan;

class RekappemasanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekappemasangan=\App\Models\RekapPemasangan::All();
        return view('admin.datasalesteknisi.rekappemasangan' ,['rekappemasangan' => $rekappemasangan]);
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
        $rekappemasangan=\App\Models\RekapPemasangan::All();
        $temprekappemasangan=\App\Models\TempRekapPemasangan::All();
        $viewrekappemasangan=\App\Models\ViewRekapPemasangan::All();
        $AWAL = 'RK';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\RekapPemasangan::max('no_rekmas');
        $no = 1;
        $formatnya=sprintf("%03s", abs((int)$noUrutAkhir + 1)). '-' . $AWAL .'-' . $bulanRomawi[date('n')] .'-' . date('Y');
        return view('admin.datasalesteknisi.inputrekappemasangan' ,['jabatan' => $jabatan, 'karyawan' => $karyawan , 'rekappemasangan' => $rekappemasangan, 'temprekappemasangan' => $temprekappemasangan, 'viewrekappemasangan' => $viewrekappemasangan, 'formatnya' => $formatnya]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (TempRekapPemasangan::where('kd_jabatan', $request->kd_jabatan)->exists()) {
            TempRekapPemasangan::where('totpem', $request->totpem)->update(['totpem' => $request->totpem]);
            return redirect()->route('rekappemasangan.create');
        }else{
            TempRekapPemasangan::create([
                'totpem' => $request->totpem,
                'kd_jabatan' => $request->kd_jabatan
            ]);
        return redirect()->route('rekappemasangan.create');
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
        $hapus = \App\Models\TempRekapPemasangan::findOrFail($id);
        $hapus->delete();
        return redirect()->route('rekappemasangan.create')->with('success', 'Data Berhasil Dihapus');
    }
}
