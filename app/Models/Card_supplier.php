<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card_supplier extends Model
{
    use HasFactory;

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
