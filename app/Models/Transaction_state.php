<?php

namespace App\Models;

use App\Enums\TransactionStateEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction_state extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function name(): Attribute
    {
        return Attribute::make(
            get: fn() => TransactionStateEnum::from($this->attributes['name']),
            set: fn(string $value) => $this->attributes['name'] = TransactionStateEnum::from($value)->value,
        );
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
