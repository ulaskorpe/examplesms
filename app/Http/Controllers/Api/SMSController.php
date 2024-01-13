<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Carbon;
use PHPUnit\Framework\MockObject\Stub\ReturnCallback;

class SMSController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function sendSMS(Request $request){
        try {   
            if($this->validateSms($request)){

              
             $sms=   Message::create([
                    'customer_id'=>auth()->user()->id,
                    'receiver'=>$request['receiver'],
                    'message'=>$request['message'],
                    'is_sent'=>false,
                 
                ]);
 
                return response()->json(['sms'=>$sms,'message'=>'SMS sent successfully'],200);
            }

          } catch (Exception $e) {
                  return $e->getMessage();
          }
    }


    private function validateSms(Request $request){
        if(!empty($request['receiver']) && !empty($request['message']) && $this->isValidPhone($request['receiver'])){
            return true;
        }

        return false;
    }

    private function isValidPhone($phone){
        return true;
    }
}
