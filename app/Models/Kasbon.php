<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasbon extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "kasbon";
    protected $primaryKey = "id";
    protected $fillable = ['id','user_id','tgl','jam','file','biaya'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
