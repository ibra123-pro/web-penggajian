<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_user= new \App\Models\User;
        $save_user->name=$request->get('name');
        $save_user->email=$request->get('email');
        if ($request->get('roles')=='ADMIN'){
            $save_user->assignRole('admin');
        }
        elseif ($request->get('roles')=='KARYAWAN'){
            $save_user->assignRole('karyawan');
        }
        elseif ($request->get('roles')=='SALES'){
            $save_user->assignRole('sales');
        }
        elseif ($request->get('roles')=='TEKNISI'){
            $save_user->assignRole('teknisi');
        }
        else {
            $save_user->assignRole('dirut');
        }
        if ($request->get('roles')=='ADMIN'){
            $save_user->password= bcrypt('adm-2021');
        }
        elseif ($request->get('roles')=='KARYAWAN'){
            $save_user->password= bcrypt('krw-2021');
        }
        elseif ($request->get('roles')=='SALES'){
            $save_user->password= bcrypt('sls-2021');
        }
        elseif ($request->get('roles')=='TEKNISI'){
            $save_user->password= bcrypt('tkn-2021');
        }
        elseif ($request->get('roles')=='DIRUT'){
            $save_user->password= bcrypt('drt-2021');
        }
        $save_user->save();
        return redirect()->route('register.index')->with('success', 'Silahkan Melakukan Login!');
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
