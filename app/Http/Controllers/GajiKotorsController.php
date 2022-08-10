<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class GajiKotorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('admin.datagaji.isigajikotor' ,['jabatan' => $jabatan, 'karyawan' => $karyawan, 'gajikotor' => $gajikotor, 'tempgajikotor' => $tempgajikotor, 'viewgajikotor' => $viewgajikotor, 'rekappresensi' => $rekappresensi, 'temprekappresensi' => $temprekappresensi, 'viewrekappresensi' => $viewrekappresensi, 'rekappemasangan' => $rekappemasangan, 'temprekappemasangan' => $temprekappemasangan, 'viewrekappemasangan' => $viewrekappemasangan, 'rekapcostumer' => $rekapcostumer, 'temprekapcostumer' => $temprekapcostumer, 'viewrekapcostumer' => $viewrekapcostumer]);
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
