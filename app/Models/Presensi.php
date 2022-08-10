<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;    
    public $timestamps = false;
    protected $table = "presensi";
    protected $primaryKey = "id";
    protected $fillable = ['id','user_id','tgl','jammasuk','file','jamkeluar'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
