<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "costumer";
    protected $primaryKey = "no_costumer";
    protected $fillable = ['no_costumer','user_id','tgl','nm_costumer','telepon','id_paket','work','ktp','alamat'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
