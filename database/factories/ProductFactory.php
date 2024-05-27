<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

class ProductFactory extends Factory
{
    protected array $imageUrls = [];

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        if (! $this->imageUrls) {
            $this->loadImageUrls();
        }

        $suppliers = Supplier::pluck('id')->toArray();

        return [
            'name' => ucwords($this->faker->unique()->sentence(2)),
            'description' => $this->faker->text,
            'price' => $this->faker->randomNumber(4),
            'image' => $this->faker->randomElement($this->imageUrls),
            'quantity' => $this->faker->randomNumber(3),
            'sku' => $this->faker->unique()->bothify('####-###-###'), // 4225-776-3234
            'supplier_id' => $this->faker->randomElement($suppliers),
            'active' => true,
        ];
    }

    private function loadImageUrls()
    {
        $imagesPath = public_path('images'); // Adjust the path to your images folder
        $allFiles = File::allFiles($imagesPath);

        $uniqueImageFiles = [];
        foreach ($allFiles as $file) {
            if (in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'])) {
                $imageHash = md5_file($file->getPathname());
                if (! isset($uniqueImageFiles[$imageHash])) {
                    $uniqueImageFiles[$imageHash] = asset('images/'.$file->getFilename());
                }
            }
        }

        $this->imageUrls = array_values($uniqueImageFiles);
    }
}
