<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GajiKotor extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $primaryKey = "no_gakot";
    protected $table = "gaji_kotor";
    protected $fillable=['no_gakot','tgl_gakot','subgapok','subpen','subrew','subtotal','subtunjangan','submas','subgakot','nik'];
}