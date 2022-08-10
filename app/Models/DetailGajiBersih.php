<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailGajiBersih extends Model
{
    use HasFactory;
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "detail_gaji_bersih";
    protected $fillable=['no_gaber','kd_jabatan','gakot','bpjskeper','bpjskekar','bpjstkper','bpjstkkar'];
}
