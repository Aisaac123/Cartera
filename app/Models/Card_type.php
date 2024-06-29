<?php

namespace App\Models;

use App\Enums\CardTypeEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function name(): Attribute
    {
        return Attribute::make(
            get: fn() => CardTypeEnum::from($this->attributes['name']),
            set: fn(string $value) => $this->attributes['name'] = CardTypeEnum::from($value)->value,
        );
    }

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
