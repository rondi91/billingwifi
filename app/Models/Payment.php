<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function billing()
    {
        // 1 to 1 ,1 post punya 1 kategory 
        return $this->belongsTo(Billing::class);
    }


}
