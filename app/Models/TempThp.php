<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempThp extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_jabatan';
    protected $keyType = 'string';
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "temp_thp";
    protected $fillable=['kd_jabatan','no_upkas','no_gaber','gaber','kasbon'];
}
