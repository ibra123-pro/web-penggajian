<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\GajiKotor;
use App\Models\TempGajiKotor;
use App\Models\ViewGajiKotor;
use App\Models\RekapPresensi;
use App\Models\TempRekapPresensi;
use App\Models\ViewRekapPresensi;
use App\Models\RekapPemasangan;
use App\Models\TempRekapPemasangan;
use App\Models\ViewRekapPemasangan;
use App\Models\RekapCostumer;
use App\Models\TempRekapCostumer;
use App\Models\ViewRekapCostumer;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class GajiKotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gaji_kotor=\App\Models\GajiKotor::All();
        return view('admin.datagaji.gajikotor',['gajikotor'=>$gaji_kotor]);
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
        $gajikotor=\App\Models\GajiKotor::All();
        $tempgajikotor=\App\Models\TempGajiKotor::All();
        $viewgajikotor=\App\Models\ViewGajiKotor::All();   
        $rekappresensi=\App\Models\RekapPresensi::All();
        $temprekappresensi=\App\Models\TempRekapPresensi::All();
        $viewrekappresensi=\App\Models\ViewRekapPresensi::All();
        $rekappemasangan=\App\Models\RekapPemasangan::All();
        $temprekappemasangan=\App\Models\TempRekapPemasangan::All();
        $viewrekappemasangan=\App\Models\ViewRekapPemasangan::All();
        $rekapcostumer=\App\Models\RekapCostumer::All();
        $temprekapcostumer=\App\Models\TempRekapCostumer::All();
        $viewrekapcostumer=\App\Models\ViewRekapCostumer::All();
        $AWAL = 'GK';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\GajiKotor::max('no_gakot');
        $no = 1;
        $formatnya=sprintf("%03s", abs((int)$noUrutAkhir + 1)). '-' . $AWAL .'-' . $bulanRomawi[date('n')] .'-' . date('Y');
        return view('admin.datagaji.inputgajikotor' ,['jabatan' => $jabatan, 'karyawan' => $karyawan, 'gajikotor' => $gajikotor, 'tempgajikotor' => $tempgajikotor, 'viewgajikotor' => $viewgajikotor, 'rekappresensi' => $rekappresensi, 'temprekappresensi' => $temprekappresensi, 'viewrekappresensi' => $viewrekappresensi, 'rekappemasangan' => $rekappemasangan, 'temprekappemasangan' => $temprekappemasangan, 'viewrekappemasangan' => $viewrekappemasangan, 'rekapcostumer' => $rekapcostumer, 'temprekapcostumer' => $temprekapcostumer, 'viewrekapcostumer' => $viewrekapcostumer, 'formatnya' => $formatnya]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if (TempGajiKotor::where('kd_jabatan', $request->kd_jabatan)->exists()) {
            TempGajiKotor::where('gapok', $request->gapok)->update(['gapok' => $request->gapok]);
            TempGajiKotor::where('totalpen', $request->totalpen)->update(['totalpen' => $request->totalpen]);
            TempGajiKotor::where('totalrew', $request->totalrew)->update(['totalrew' => $request->totalrew]);
            TempGajiKotor::where('total', $request->total)->update(['total' => $request->total]);
            TempGajiKotor::where('tunjangan', $request->tunjangan)->update(['tunjangan' => $request->tunjangan]);
            TempGajiKotor::where('totalmas', $request->totalmas)->update(['totalmas' => $request->totalmas]);
            return redirect()->route('gajikotor.create');
        }else{
            TempGajiKotor::create([   
                'gapok' => $request->gapok,           
                'totalpen' => $request->totalpen,
                'totalrew' => $request->totalrew,
                'total' => $request->total,
                'tunjangan' => $request->tunjangan,
                'totalmas' => $request->totalmas,
                'kd_jabatan' => $request->kd_jabatan,  
                'no_rekcos' => $request->no_rekcos,
                'no_rekmas' => $request->no_rekmas,
                'no_rekpres' => $request->no_rekpres
            ]);
        return redirect()->route('gajikotor.create');
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
        $hapus = \App\Models\TempGajiKotor::findOrFail($id);
        $hapus->delete();
        return redirect()->route('gajikotor.create')->with('success', 'Data Berhasil Dihapus');
    }
}
