<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

class ProductFactory extends Factory
{
    protected static array $imageUrls = [];
    protected static int $currentIndex = 0;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        if (empty(self::$imageUrls)) {
            $this->loadImageUrls();
        }

        $imageUrl = $this->getUniqueImageUrl();

        $suppliers = Supplier::pluck('id')->toArray();

        return [
            'name' => ucwords($this->faker->unique()->sentence(2)),
            'description' => $this->faker->text,
            'price' => $this->faker->randomNumber(4),
            'image' => $imageUrl,
            'quantity' => $this->faker->randomNumber(3),
            'sku' => $this->faker->unique()->bothify('####-###-###'), // 4225-776-3234
            'supplier_id' => $this->faker->randomElement($suppliers),
            'active' => true,
        ];
    }

    private function loadImageUrls(): void
    {
        $imagesPath = public_path('images');
        $allFiles = File::allFiles($imagesPath);

        $uniqueImageFiles = [];

        foreach ($allFiles as $file) {
            if (in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'])) {
                $imageHash = md5_file($file->getPathname());
                if (!isset($uniqueImageFiles[$imageHash])) {
                    $uniqueImageFiles[$imageHash] = asset('images/' . $file->getFilename());
                }
            }
        }

        self::$imageUrls = array_values($uniqueImageFiles);
        shuffle(self::$imageUrls);
    }

    private function getUniqueImageUrl(): string
    {
        if (self::$currentIndex >= count(self::$imageUrls)) {
            self::$currentIndex = 0;
            shuffle(self::$imageUrls);
        }

        $imageUrl = self::$imageUrls[self::$currentIndex];
        self::$currentIndex++;

        return $imageUrl;
    }
}
