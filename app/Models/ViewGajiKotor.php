<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewGajiKotor extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_jabatan';
    protected $keyType = 'string';
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "view_gaji_kotor";
    protected $fillable=['kd_jabatan','nm_jabatan','gapok','totalpen','totalrew','total','tunjangan','totalmas'];
}