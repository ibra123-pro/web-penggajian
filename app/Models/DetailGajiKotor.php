<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailGajiKotor extends Model
{
    use HasFactory;
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "detail_gaji_kotor";
    protected $fillable=['no_gakot','kd_jabatan','gapok','totalpen','totalrew','total','tunjangan','totalmas'];
}
