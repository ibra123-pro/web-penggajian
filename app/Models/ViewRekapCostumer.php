<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewRekapCostumer extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_jabatan';
    protected $keyType = 'string';
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "view_rekap_costumer";
    protected $fillable=['kd_jabatan','nm_jabatan','totpen','totrew','sub_pen','sub_rew'];
}
