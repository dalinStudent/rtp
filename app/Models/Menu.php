<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    /**
     * Get the menu that owns the user.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
