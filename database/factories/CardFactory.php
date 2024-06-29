<?php

namespace Database\Factories;

use App\Models\Bank;
use App\Models\Card;
use App\Models\Card_supplier;
use App\Models\Card_type;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    protected $model = Card::class;

    public function definition(): array
    {
        return [
            'number' => $this->faker->creditCardNumber(),
            'expiration_date' => $this->faker->creditCardExpirationDate(),
            'cvv' => $this->faker->realText($this->faker->numberBetween(100, 9999)),
            'purpose' => $this->faker->randomElement(['personal', 'business']),
            'income' => $this->faker->boolean(),
            'expenditure' => $this->faker->boolean(),
            'amount' => $this->faker->randomFloat(2, 0, 999999),
            'card_type_id' => Card_type::factory(),
            'card_supplier_id' => Card_supplier::factory(),
            'bank_id' => Bank::factory(),
            'wallet_id' => Wallet::factory(),
        ];
    }
}
