<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasangan extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "pemasangan";
    protected $primaryKey = "no_pemasangan";
    protected $fillable = ['no_pemasangan','user_id','tgl','no_costumer','berac'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
