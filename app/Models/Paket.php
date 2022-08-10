<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_paket';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "paket";
    protected $fillable=['id_paket','nm_paket','harga'];
}
