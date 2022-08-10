<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempGajiKotor extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_jabatan';
    protected $keyType = 'string';
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "temp_gaji_kotor";
    protected $fillable=['kd_jabatan','no_rekcos','no_rekmas','no_rekpres','gapok','totalpen','totalrew','total','tunjangan','totalmas'];
}
