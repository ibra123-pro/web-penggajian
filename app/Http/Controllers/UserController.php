<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Storage;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\Models\User::All();
        return view('admin/datauser.user',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/datauser.inputuser');
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
			'foto' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:10000',
		]);
        $save_user= new \App\Models\User;
        $save_user->name=$request->get('username');
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
        if($request->file('foto')){
            $user['foto'] = $request->file('foto')->store('foto-user');
        }
        $save_user->save();
        return redirect()->route('user.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin/datauser.user',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('admin/datauser.edituser',compact('user','roles','userRole'));
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
        $this->validate($request, [
			'foto' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:10000',
		]);
        $user = User::findOrFail($id);
        if($request->file('foto')){
            $user['foto'] = $request->file('foto')->store('foto-update-user');
        }
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('role'));
        $user->save();
        return redirect()->route('user.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = \App\Models\User::findOrFail($id);
        $hapus->delete();
        $hapus->removeRole('admin','karyawan','sales','teknisi','pemilik');
        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus');
    }
}
