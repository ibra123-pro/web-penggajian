<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempGajiBersih extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_jabatan';
    protected $keyType = 'string';
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "temp_gaji_bersih";
    protected $fillable=['kd_jabatan','no_gakot','gakot','bpjskeper','bpjskekar','bpjstkper','bpjstkkar'];
}

