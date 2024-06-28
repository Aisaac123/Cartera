<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    public function transaction_category(): BelongsTo
    {
        return $this->belongsTo(Transaction_category::class);
    }

    public function transaction_type(): BelongsTo
    {
        return $this->belongsTo(Transaction_type::class);
    }

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Transaction_destination::class);
    }

    public function transaction_state(): BelongsTo
    {
        return $this->belongsTo(Transaction_state::class);
    }
}
