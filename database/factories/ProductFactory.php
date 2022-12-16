<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'quantity'=> $this->faker->numberBetween(1,500),
            'price'=> $this->faker->numberBetween(100,2000),
            'category_id'=> Category::inRandomOrder()->first()->id
        ];
    }
}
