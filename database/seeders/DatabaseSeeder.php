<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Message;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      //  \App\Models\User::factory(10)->create();
     // Customer::factory(300)->create();
       // Message::factory(2000)->create();
       $this->call(CountryOSSeeder::class);
       // $this->call(UserSeeder::class);
       
  
    }
}
