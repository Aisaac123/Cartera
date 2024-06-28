<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card extends Model
{
    use HasFactory;

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }

    public function card_supplier(): BelongsTo
    {
        return $this->belongsTo(Card_supplier::class);
    }

    public function card_type(): BelongsTo
    {
        return $this->belongsTo(Card_type::class);
    }

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class);
    }

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
