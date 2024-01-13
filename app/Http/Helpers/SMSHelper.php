<?php

namespace App\Http\Helpers;
use App\Models\Customer;
use App\Models\Message;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
class SMSHelper{


    public static function sendSMS(Message $message){

    //     $sid = "ACb41asdfsdfdsfde67c0f0";
    //     $token = "ff8230 ----8aae6df4";
    //     $client = new Twilio\Rest\Client($sid, $token);
        
        
    //   $result =  $client->messages->create(
             
    //         $message['receiver'],
    //         [
    //             // A Twilio phone number you purchased at https://console.twilio.com
    //             'from' => $message['customer_id'],
    //             'body' => $message['message']
    //         ]
    //     );

 
    //     if($result){
        $message->is_sent = true;
        $message->sent_date = Carbon::now()->format('Y-m-d H:i:s');
        $message->save();
    //     }

        $txt = $message->customer_id .">>".$message->receiver.":::".$message->message;
        Log::channel('sms_sent')->info($txt);
    }
}