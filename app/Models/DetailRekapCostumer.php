<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRekapCostumer extends Model
{
    use HasFactory;
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "detail_rekap_costumer";
    protected $fillable=['no_rekpres','kd_jabatan','totpen','totrew','subpen','subrew'];
}
