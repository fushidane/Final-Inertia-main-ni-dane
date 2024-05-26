<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product = Product::inRandomOrder()->first();

        return [
            'product_id' => $product->id,
            'quantity' => $this->faker->numberBetween(1, 5),
            'total_price' => $product->price * $this->faker->numberBetween(1, 5),
        ];
    }
}
