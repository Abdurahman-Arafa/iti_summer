<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'total' => $this->faker()->numberBetween(100,5000),
            'user_id'=> User::inRandomOrder()->first()->id,

            //I haven't made the seeders yet....to be continued
        ];
    }
}
