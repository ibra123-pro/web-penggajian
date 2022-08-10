<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $primaryKey = 'nik';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "karyawan";
    protected $fillable=['nik','nm_karyawan','kd_jabatan','tunjangan','jk','tgl_lahir','agama','alamat','telepon'];
}