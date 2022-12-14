<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UpdateKasbon;
use PDF;

class LaporanUpdateKasbonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updatekasbon=\App\Models\UpdateKasbon::All();
        return view('direkturutama.laporanupdatekasbon',['updatekasbon' => $updatekasbon]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $updatekasbon=\App\Models\UpdateKasbon::All();
        $pdf = PDF::loadView('direkturutama.updatekasbon',['updatekasbon' => $updatekasbon])->setPaper('A4','landscape');
        return $pdf->stream();
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
