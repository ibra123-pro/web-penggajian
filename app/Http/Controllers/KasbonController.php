<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Kasbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use PDF;

class KasbonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasbon=\App\Models\Kasbon::All();
        return view('admin/datakasbon.kasbon' ,['kasbon' => $kasbon]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data-data.inputkasbon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
            'biaya' => 'required',
		]);
        
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');       
        $localtime = $date->format('H:i:s');
        $file = $request->get('file');
        $biaya = $request->get('biaya');

        $kasbon = Kasbon::where([
            ['user_id','=',auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();
        if ($kasbon){
            return redirect()->route('kasbon.create')->with('success', 'Anda Telah Mengajukan Kasbon Hari Ini');
        }else{
            Kasbon::create([
                'user_id' => auth()->user()->id,
                'tgl' => $tanggal,                
                'jam' => $localtime,
                'file' => $file,
                'biaya' => $biaya,
            ]);
            return redirect()->route('kasbon.create')->with('success', 'Terima Kasih Telah Mengajukan Kasbon Hari Ini');
        }
        return redirect()->route('kasbon.create');
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
