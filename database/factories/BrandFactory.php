<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Brand>
 */
class BrandFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->company(),
            // TODO rewrite
            'thumbnail' => 'https://picsum.photos/300/300',
        ];
    }
}
