<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucwords($this->faker->unique()->company),
            'email' => $this->faker->unique()->companyEmail,
            'phone' => $this->faker->unique()->phoneNumber,
            'address' => $this->faker->address,
            'code' => $this->faker->unique()->bothify('SUP-###-#?#-###'), //422-776-323
        ];
    }
}
