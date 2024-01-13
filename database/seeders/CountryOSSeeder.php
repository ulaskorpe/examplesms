<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Os;

class CountryOSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $countries = ['Turkiye','KKTC','Azerbaijan','Greece','Germany'];
       $oss = ['IOS','Android','Blackberry','Symbian','Other'];
       foreach($countries as $co){
        $c = new Country();
        $c->name = $co;
        $c->save();
       }

       foreach($oss as $os){
        $o = new Os();
        $o->name = $os;
        $o->save();
       }

    }
}
