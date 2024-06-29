<?php

namespace Database\Factories;

use App\Enums\CardTypeEnum;
use App\Models\Card_type;
use Illuminate\Database\Eloquent\Factories\Factory;

class Card_typeFactory extends Factory
{
    protected $model = Card_type::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(array_column(CardTypeEnum::cases(), 'value'))
        ];
    }
}
