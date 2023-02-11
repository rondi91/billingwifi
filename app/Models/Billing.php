<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    public function payment()
    {
        // 1 to 1 ,1 post punya 1 kategory 
        return $this->hasMany(Payment::class);
    }
}
