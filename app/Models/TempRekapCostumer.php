<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempRekapCostumer extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_jabatan';
    protected $keyType = 'string';
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "temp_rekap_costumer";
    protected $fillable=['kd_jabatan','totpen','totrew'];
}
