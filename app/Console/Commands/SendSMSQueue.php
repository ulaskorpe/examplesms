<?php

namespace App\Console\Commands;

use App\Http\Helpers\SMSHelper;
use App\Models\Message;
use Illuminate\Console\Command;

class SendSMSQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-sms-queue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $messages = Message::where('is_sent','=',false)->limit(100)->orderBy('created_at','ASC')->get();

        $bar = $this->output->createProgressBar(count($messages));
         $bar->start();
         foreach($messages as $msg){
           SMSHelper::sendSMS($msg);
           $bar->advance();
         }
         $bar->finish();
         echo PHP_EOL;
    }
}
