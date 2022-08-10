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

class GajiBersihsController extends Controller
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
        $gajibersih=\App\Models\GajiBersih::All();
        $tempgajibersih=\App\Models\TempGajiBersih::All();
        $viewgajibersih=\App\Models\ViewGajiBersih::All();   
        $gajikotor=\App\Models\GajiKotor::All();
        $tempgajikotor=\App\Models\TempGajiKotor::All();
        $viewgajikotor=\App\Models\ViewGajiKotor::All();
        return view('admin.datagaji.isigajibersih' ,['jabatan' => $jabatan, 'karyawan' => $karyawan, 'gajibersih' => $gajibersih, 'tempgajibersih' => $tempgajibersih, 'viewgajibersih' => $viewgajibersih, 'gajikotor' => $gajikotor, 'tempgajikotor' => $tempgajikotor, 'viewgajikotor' => $viewgajikotor]);        
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
