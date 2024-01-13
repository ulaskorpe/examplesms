<?php

namespace Database\Factories;

use App\Http\Helpers\CustomerHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' =>  CustomerHelper::pickCustomer(),
            'receiver' =>  rand(5000000000,5999999999),
            'message' => fake()->sentence(),
            'is_sent' => 0,
          
        ];
    }
}
