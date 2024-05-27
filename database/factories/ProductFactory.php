<?php

namespace Database\Factories;

use App\Models\Supplier;
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
    public function definition(): array
    {
        $suppliers = Supplier::pluck('id')->toArray();

        return [
            'name' => ucwords($this->faker->unique()->sentence(2)),
            'description' => $this->faker->text,
            'price' => $this->faker->randomNumber(4),
            'image' => $this->faker->imageUrl(),
            'quantity' => $this->faker->randomNumber(3),
            'sku' => $this->faker->unique()->bothify('####-###-###'), //4225-776-3234
            'supplier_id' => $this->faker->randomElement($suppliers),
            'active' => true,
        ];
    }
}
