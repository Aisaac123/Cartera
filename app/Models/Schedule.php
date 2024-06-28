<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    use HasFactory;

    public function transaction_types(): BelongsTo
    {
        return $this->belongsTo(Transaction_type::class);
    }

    public function destinations(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }

    public function cards(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }
}
