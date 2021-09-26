<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    use HasFactory;

    /**
     * Get the user the game belongs to.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
