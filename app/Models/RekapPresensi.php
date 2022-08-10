<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapPresensi extends Model
{
    use HasFactory; 
    protected $primaryKey = 'no_rekpres';
    public $incrementing = false;    
    public $timestamps = false;
    protected $keyType = 'string';
    protected $table = "rekap_presensi";
    protected $fillable=['no_rekpres','tgl_rekpres','totalseh','totalset','totalmas','nik'];
}
