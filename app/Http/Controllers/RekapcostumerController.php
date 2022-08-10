<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\RekapCostumer;
use App\Models\TempRekapCostumer;
use App\Models\ViewRekapCostumer;

class RekapcostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekapcostumer=\App\Models\RekapCostumer::All();
        return view('admin.datasalesteknisi.rekappendapatancostumer' ,['rekapcostumer' => $rekapcostumer]);
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
        $rekapcostumer=\App\Models\RekapCostumer::All();
        $temprekapcostumer=\App\Models\TempRekapCostumer::All();
        $viewrekapcostumer=\App\Models\ViewRekapCostumer::All();
        $AWAL = 'RC';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\RekapCostumer::max('no_rekcos');
        $no = 1;
        $formatnya=sprintf("%03s", abs((int)$noUrutAkhir + 1)). '-' . $AWAL .'-' . $bulanRomawi[date('n')] .'-' . date('Y');
        return view('admin.datasalesteknisi.inputrekapcostumer' ,['jabatan' => $jabatan, 'karyawan' => $karyawan , 'rekapcostumer' => $rekapcostumer, 'temprekapcostumer' => $temprekapcostumer, 'viewrekapcostumer' => $viewrekapcostumer, 'formatnya' => $formatnya]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (TempRekapCostumer::where('kd_jabatan', $request->kd_jabatan)->exists()) {
            TempRekapCostumer::where('totpen', $request->totpen)->update(['totpen' => $request->totpen]);
            TempRekapCostumer::where('totrew', $request->totrew)->update(['totrew' => $request->totrew]);
            return redirect()->route('rekapcostumer.create');
        }else{
            TempRekapCostumer::create([
                'totpen' => $request->totpen,
                'totrew' => $request->totrew,
                'kd_jabatan' => $request->kd_jabatan
            ]);
        return redirect()->route('rekapcostumer.create');
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
        $hapus = \App\Models\TempRekapCostumer::findOrFail($id);
        $hapus->delete();
        return redirect()->route('rekapcostumer.create')->with('success', 'Data Berhasil Dihapus');
    }
}
