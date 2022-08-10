<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_jabatan';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "jabatan";
    protected $fillable=['kd_jabatan','nm_jabatan','baypem','baypen','bayseh','bayset','gapok'];
}
