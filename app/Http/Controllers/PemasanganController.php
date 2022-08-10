<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DateTimeZone;
use Alert;
use App\Models\Pemasangan;
use App\Models\Costumer;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class PemasanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasangan=\App\Models\Pemasangan::All();
        return view('admin.datasalesteknisi.pemasangan' ,['pemasangan' => $pemasangan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costumer=\App\Models\Costumer::All();
        $pemasangan=\App\Models\Pemasangan::All();
        $AWAL = 'PM';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\Pemasangan::max('no_pemasangan');
        $no = 1;
        $formatnya=sprintf("%03s", abs((int)$noUrutAkhir + 1)). '-' . $AWAL .'-' . $bulanRomawi[date('n')] .'-' . date('Y');
        return view('teknisi.inputpemasangan' ,['costumer' => $costumer, 'formatnya' => $formatnya]);
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
            'no_pemasangan' => 'required',
            'no_costumer' => 'required',
            'berac' => 'required',
		]);
                
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');  
        $nofaktur = $request->get('no_pemasangan');
        $nocostumer = $request->get('no_costumer');
        $berac = $request->get('berac');

        $pemasangan = Pemasangan::where([
            ['no_costumer', '=' ,$nocostumer]
        ])->first();
        if ($pemasangan){
            return redirect()->route('pemasangan.create')->with('success', 'Anda Telah Mengisi Data Pemasangan Ini');
        }else{
            Pemasangan::create([
                'no_pemasangan' => $nofaktur,
                'user_id' => auth()->user()->id,
                'tgl' => $tanggal,   
                'no_costumer' => $nocostumer,
                'berac' => $berac,
            ]);
            return redirect()->route('pemasangan.create')->with('success', 'Data Pemasangan Berhasil Diisi');
        }
        return redirect()->route('pemasangan.create');
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
