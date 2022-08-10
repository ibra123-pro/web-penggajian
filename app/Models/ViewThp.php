<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewThp extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_jabatan';
    protected $keyType = 'string';
    public $incrementing = false;    
    public $timestamps = false;
    protected $table = "view_thp";
    protected $fillable=['kd_jabatan','nm_jabatan','gaber','kasbon'];
}
