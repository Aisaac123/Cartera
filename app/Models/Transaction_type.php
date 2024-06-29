<?php

namespace App\Models;

use App\Enums\TransactionTypeEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function name(): Attribute
    {
        return Attribute::make(
            get: fn() => TransactionTypeEnum::from($this->attributes['name']),
            set: fn(string $value) => $this->attributes['name'] = TransactionTypeEnum::from($value)->value,
        );
    }

    public function Schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    public function Transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
