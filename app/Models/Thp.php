<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thp extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $primaryKey = "no_thp";
    protected $table = "thp";
    protected $fillable=['no_thp','tgl_thp','subgaber','subbaykas','subsiskas','subthp','nik'];
}
