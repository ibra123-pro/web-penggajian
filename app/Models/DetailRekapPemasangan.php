<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRekapPemasangan extends Model
{
    use HasFactory;
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "detail_rekap_pemasangan";
    protected $fillable=['no_rekmas','kd_jabatan','totpem','subtotal'];
}
