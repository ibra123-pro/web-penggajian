<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GajiBersih extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $primaryKey = "no_gaber";
    protected $table = "gaji_bersih";
    protected $fillable=['no_gaber','tgl_gaber','subgakot','subbpjskeper','subbpjskekar','subbpjstkper','subbpjstkkar','subgaber','nik'];
}
