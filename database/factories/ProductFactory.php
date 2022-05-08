<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 4),
            'sub_category_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->name(),
            'slug' => Str::slug($this->faker->name()),
            'sale_price' => $this->faker->numberBetween(100, 10000),
            'price' => $this->faker->numberBetween(100, 20000),
            'image' => 'img/shop/catelog/' . $this->faker->numberBetween(1, 72) . '.jpg',
            'quantity' => $this->faker->numberBetween(10, 50),
            'status' => 'Còn hàng',
            'description' => $this->faker->paragraph(200),
            'content' => $this->faker->paragraph(500),
            'video' => 'abc',
            'info' => $this->faker->paragraph(50),
            'shipping_options' => $this->faker->paragraph(50),
        ];
    }
}
