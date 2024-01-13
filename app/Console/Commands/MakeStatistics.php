<?php

namespace App\Console\Commands;

use App\Models\Statistic;
use Illuminate\Console\Command;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class MakeStatistics extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make-statistics';

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
        $dates = Message::select(DB::raw('DATE(`created_at`) as day'))
        ->distinct()
        ->orderBy('day')
        ->get()
        ->pluck('day')
        ->toArray();
         $bar = $this->output->createProgressBar(count($dates));
         $bar->start();
        foreach($dates as $date){
            $start_at = Carbon::parse($date." 00:00:00");
            $end_at = Carbon::parse($date." 23:59:59");
            $c_count = Message::whereBetween('created_at',[$start_at,$end_at])->count();
            $s_count = Message::whereBetween('sent_date',[$start_at,$end_at])->count();
            $stat = Statistic::where('date','=',$date)->first();
            if(empty($stat)){
                $stat = new Statistic();
                $stat->date = $date;
            }
            $stat->created_msg  = $c_count ;
            $stat->sent_msg  = $s_count ;
            $stat->save();
        //    echo $date . ":".$c_count.":".$s_count.PHP_EOL;
            $bar->advance();
        }
      $bar->finish();
        echo PHP_EOL;
    }
}
