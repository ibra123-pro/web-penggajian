<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\Thp;
use App\Models\TempThp;
use App\Models\ViewThp;
use App\Models\UpdateKasbon;
use App\Models\GajiBersih;
use App\Models\TempGajiBersih;
use App\Models\ViewGajiBersih;

class ThpsController extends Controller
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
        $thp=\App\Models\Thp::All();
        $tempthp=\App\Models\TempThp::All();
        $viewthp=\App\Models\ViewThp::All();
        $updatekasbon=\App\Models\UpdateKasbon::All();
        $gajibersih=\App\Models\GajiBersih::All();
        $tempgajibersih=\App\Models\TempGajiBersih::All();
        $viewgajibersih=\App\Models\ViewGajiBersih::All();   
        return view('admin.datagaji.isithp' ,['jabatan' => $jabatan, 'karyawan' => $karyawan, 'thp' => $thp, 'tempthp' => $tempthp, 'viewthp' => $viewthp, 'updatekasbon' => $updatekasbon, 'gajibersih' => $gajibersih, 'tempgajibersih' => $tempgajibersih, 'viewgajibersih' => $viewgajibersih]);        
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
