<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateKasbon extends Model
{
    use HasFactory;   
    protected $primaryKey = 'no_upkas';
    public $incrementing = false;   
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "update_kasbon";
    protected $fillable=['no_upkas','nik','totpen','baykas'];
}
