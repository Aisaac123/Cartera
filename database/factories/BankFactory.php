<?php

namespace Database\Factories;

use Faker\Provider\es_ES\Payment;
use App\Models\Bank;
use Illuminate\Database\Eloquent\Factories\Factory;

class BankFactory extends Factory
{
    protected $model = Bank::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            /*
             * Se usa el codigo SWIFT (Society for Worldwide Interbank Financial Telecommunication)
             * O también conocido como BIC (Bank Identifier Code) para identificar los bancos
             * Sorpresivamente el faker tiene un metodo para esto, pero este codigo sigue los
             * siguientes parametros:
             * Codigo del banco: 4 primeros caracteres
             * Codigo del pais: 2 siguientes caracteres
             * Codigo de la localidad: 2 siguientes caracteres
             * Codigo de la sucursal: 3 siguientes caracteres
             *
             * Ejemplo: BBVAESMMXXX
             * BBVA: Codigo del banco
             * ES: Codigo del pais
             * MM: Codigo de la localidad
             * XXX: Codigo de la sucursal
             *
             * */
            'code' => $this->faker->swiftBicNumber(),
        ];
    }
}
