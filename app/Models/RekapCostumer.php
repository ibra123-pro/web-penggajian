<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapCostumer extends Model
{
    use HasFactory;
    protected $primaryKey = 'no_rekcos';
    public $incrementing = false;    
    public $timestamps = false;
    protected $keyType = 'string';
    protected $table = "rekap_costumer";
    protected $fillable=['no_rekcos','tgl_rekcos','totalpen','totalrew','nik'];
}
