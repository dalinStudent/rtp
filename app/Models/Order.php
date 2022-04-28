<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Get the menu that owns the user.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the menu that owns the user.
     */

    public function cheif()
    {
        return $this->belongsTo(Cheif::class);
    }
}
