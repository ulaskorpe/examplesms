<?php

namespace App\Observers;
use App\Http\Helpers\SMSHelper;
use App\Models\Message;


class MessageObserver
{
    public function created(Message $message)
    {
       SMSHelper::sendSMS($message);
    }
}
