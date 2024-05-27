<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customers = Customer::query()->pluck('id')->toArray();
        $suppliers = Supplier::query()->pluck('id')->toArray();
        $status = [
            'Draft',
            'Pending',
            'Sent',
            'Partial Payment',
            'Paid',
            'Overdue',
            'Void',
            'Refunded',
            'Disputed',
            'Closed',
        ];

        return [
            'invoice_number' => $this->faker->unique()->randomNumber(8),
            'invoice_date' => $this->faker->dateTimeBetween('-3 months'),
            'customer_id' => $this->faker->randomElement($customers),
            'supplier_id' => $this->faker->randomElement($suppliers),
            'total' => $this->faker->randomNumber(4),
            'status' => $this->faker->randomElement($status),
            'created_at' => $this->faker->dateTimeBetween('-3 months'),
            'updated_at' => $this->faker->dateTimeBetween('-3 months'),
        ];
    }

    public function configure(): InvoiceFactory
    {
        return $this->afterCreating(function (\App\Models\Invoice $invoice) {
            $invoice->invoiceItems()->createMany(
                \App\Models\InvoiceItem::factory()->count(5)->make([
                    'product_id' => Product::inRandomOrder()->first()->id,
                    'quantity' => rand(1, 10),
                ])->toArray()
            );
        });
    }
}
