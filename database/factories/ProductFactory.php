<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'product_name' => $this->faker->name(),
            'short_describe' => $this->faker->text(150),
            'product_describe' => $this->faker->paragraph(),
            // 'image_path' => $this->faker->image(storage_path('app/public/product'), fullPath:false)
        ];
    }
}
