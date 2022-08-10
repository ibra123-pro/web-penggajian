<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DateTimeZone;
use Alert;
use App\Models\Costumer;
use App\Models\Paket;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costumer=\App\Models\Costumer::All();
        return view('admin.datasalesteknisi.pendapatancostumer' ,['costumer' => $costumer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paket=\App\Models\Paket::All();
        $costumer=\App\Models\Costumer::All();
        $AWAL = 'CS';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\Costumer::max('no_costumer');
        $no = 1;
        $formatnya=sprintf("%03s", abs((int)$noUrutAkhir + 1)). '-' . $AWAL .'-' . $bulanRomawi[date('n')] .'-' . date('Y');
        return view('sales.inputpendapatancostumer' ,['paket' => $paket, 'formatnya' => $formatnya ]);
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
            'no_costumer' => 'required',
            'nm_costumer' => 'required',
            'telepon' => 'required',
            'id_paket' => 'required',
			'work' => 'required',
			'ktp' => 'required',
			'alamat' => 'required',
		]);
                
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');  
        $nocostumer = $request->get('no_costumer');
        $nmcostumer = $request->get('nm_costumer');
        $telepon = $request->get('telepon');
        $idpaket = $request->get('id_paket');
        $work = $request->get('work');
        $ktp = $request->get('ktp');
        $alamat = $request->get('alamat');

        $costumer = Costumer::where([
            ['nm_costumer','=',$nmcostumer]
        ])->first();
        if ($costumer){
            return redirect()->route('costumer.create')->with('success', 'Anda Telah Mengisi Data Costumer Ini');
        }else{
            Costumer::create([
                'no_costumer' => $nocostumer,
                'user_id' => auth()->user()->id,
                'tgl' => $tanggal,   
                'nm_costumer' => $nmcostumer,
                'telepon' => $telepon,
                'id_paket' => $idpaket,
                'work' => $work,
                'ktp' => $ktp,
                'alamat' => $alamat,
            ]);
            return redirect()->route('costumer.create')->with('success', 'Data Costumer Berhasil Diisi');
        }
        return redirect()->route('costumer.create');
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
