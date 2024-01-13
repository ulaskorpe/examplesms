<?php

namespace App\Http\Controllers;

use App\Http\Helpers\CustomerHelper;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Customer;
use App\Models\Os;
class DashboardController extends Controller
{
    public function dashboard(){
 
       
        $statistics = Statistic::orderBy('date')->get();
        $dates = [];
        
        foreach($statistics as $st){
            $dates[] = ['date'=> $st['date'],'created_msg'=>$st['created_msg'],'sent_msg'=>$st['sent_msg']];
        }

        $oss = Os::all();
        $os_array = [];
        foreach($oss as $os){
            $count = Customer::where('os_id','=',$os['id'])->count();
            $os_array[] = ['name'=>$os['name'],'count'=>$count];
        }

      
         return view('admin.dashboard',compact('dates','os_array'));
    }


    public function generateRandomDate($date)
    {
        // Set the start and end dates for your range
        $startDate = Carbon::parse($date);
        $endDate = Carbon::parse('2024-01-13 23:59:59');

        // Generate a random timestamp within the range
        $randomTimestamp = mt_rand($startDate->timestamp, $endDate->timestamp);

        // Create a Carbon instance from the random timestamp
        $randomDate = Carbon::createFromTimestamp($randomTimestamp);

        // Do something with the $randomDate

        return $randomDate; //response()->json(['random_date' => $randomDate->toDateTimeString()]);
    }
}


