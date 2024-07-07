<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_id'=>Str::random(10),
            'product_name'=> Str::random(10),
            'price'=>fake()->numberBetween($min=1000, $max=20000),
            'stock'=>fake()->numberBetween($min=1000, $max=20000),
            'comment'=> Str::random(10),
            'img_path'=> Str::random(10),
        ];
    }
}
