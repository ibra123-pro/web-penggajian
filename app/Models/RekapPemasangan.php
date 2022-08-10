<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapPemasangan extends Model
{
    use HasFactory;
    protected $primaryKey = 'no_rekmas';
    public $incrementing = false;    
    public $timestamps = false;
    protected $keyType = 'string';
    protected $table = "rekap_pemasangan";
    protected $fillable=['no_rekmas','tgl_rekmas','total','nik'];
}
