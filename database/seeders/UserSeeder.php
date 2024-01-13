<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->truncate();

         $user = new User();
         $user->name = 'admin';
         $user->email = 'admin@examplesms.com';
         $user->email_verified_at = now();
         $user->password = Hash::make('secret');
         $user->remember_token = Str::random(10);
         $user->save();
    }
}
