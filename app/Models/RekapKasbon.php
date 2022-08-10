<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapKasbon extends Model
{
    use HasFactory;
    protected $primaryKey = 'no_rekkas';
    public $incrementing = false;    
    public $timestamps = false;
    protected $keyType = 'string';
    protected $table = "rekap_kasbon";
    protected $fillable=['no_rekkas','tgl_rekkas','totpen','baykas','nik'];
}
