<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bank extends Model
{
    use HasFactory;

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }

    public function destinations(): HasMany
    {
        return $this->hasMany(Destination::class);
    }
}
