<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailThp extends Model
{            
    use HasFactory;
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "detail_thp";
    protected $fillable=['no_thp','kd_jabatan','gaber','kasbon'];
}
