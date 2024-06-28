<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'transaction_category_id',
        'transaction_type_id',
        'card_id',
        'destination_id',
        'transaction_state_id',
    ];

    public function destination(): HasOne
    {
        return $this->hasOne(Transaction_destination::class);
    }

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

    public function transaction_state(): BelongsTo
    {
        return $this->belongsTo(Transaction_state::class);
    }
}
