<?php

namespace Database\Factories;

use App\Http\Helpers\CustomerHelper;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
     
        return [
            'id'=> CustomerHelper::genNum(),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'address'=>fake()->address(),
            'password'=>Hash::make('password'),
            'os_id'=>rand(1,5),
            'country_id'=>rand(1,5),
           
        ];
    }


}
