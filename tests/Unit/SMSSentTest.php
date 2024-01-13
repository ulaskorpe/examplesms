<?php

namespace Tests\Feature;

use App\Http\Helpers\CustomerHelper;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SMSSentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_sms(): void
    {
        $customer = Customer::inRandomOrder()->first();
        
        $login = $this->json('POST','/api/auth/login',[
            'email'=>$customer['email'],
            'password'=>'password'
        ]);

        $response = $this->withHeaders([
             'Authorization' => 'Bearer ' . $login->access_token,
        ])->json('POST', '/api/auth/send-sms', [
            'receiver'=>CustomerHelper::pickCustomer(),
            'message'=>fake()->sentence
        ]);

      
        $response->assertStatus(200); 
        $response->assertJson(['message' => 'SMS sent successfully']);

    }
}
