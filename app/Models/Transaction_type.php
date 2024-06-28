<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction_type extends Model
{
    use HasFactory;

    public function Schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    public function Transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
