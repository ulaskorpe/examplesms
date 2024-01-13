<?php

namespace App\Http\Helpers;
use App\Models\Customer;
class CustomerHelper{

    public static function genNum(){
        $check = true ;
       while($check){
            $phone = rand(5000000000,5999999999);
            $customer = Customer::find($phone);
            $check = (empty($customer)) ? false :true;
        }
    //$phone = rand(5000000000,5999999999);
        return $phone;
         
    }

    public static function pickCustomer(){
        $randomRecord = Customer::inRandomOrder()->first();
        return $randomRecord['id'];
    }

}
