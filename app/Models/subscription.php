<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    use HasFactory;

    public function user()
    {
        // 1 to 1 ,1 post punya 1 kategory 
        return $this->belongsTo(User::class);
    }
    public function paket()
    {
        // 1 to 1 ,1 post punya 1 kategory 
        return $this->belongsTo(paket::class);
    }
}
