<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRekapPresensi extends Model
{
    use HasFactory;
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "detail_rekap_presensi";
    protected $fillable=['no_rekpres','kd_jabatan','totseh','totset','subseh','subset'];
}
