<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempRekapPemasangan extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_jabatan';
    protected $keyType = 'string';
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "temp_rekap_pemasangan";
    protected $fillable=['kd_jabatan','totpem'];
}
