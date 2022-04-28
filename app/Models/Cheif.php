<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cheif extends Model
{
    use HasFactory;

    /**
     * Get the order that owns the cheif.
     */

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }

    
}
