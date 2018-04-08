<?php

use App\Occasion;
use Illuminate\Database\Seeder;

class OccasionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            Occasion::create([
                'occasion_name'=>'Anniversary Gifts',
            ]);
            Occasion::create([
                'occasion_name'=>'Baby Gifts',
            ]);
            Occasion::create([
                'occasion_name'=>'Congratulations Gifts',
            ]);
            Occasion::create([
                'occasion_name'=>'Corporate Chocolate',
            ]);
            Occasion::create([
                'occasion_name'=>'Graduation Gifts',
            ]);
            Occasion::create([
                'occasion_name'=>'Holiday Gifts',
            ]);
            Occasion::create([
                'occasion_name'=>'Sorry Gifts',
            ]);
            Occasion::create([
                'occasion_name'=>'Happy Gifts',
            ]);
            Occasion::create([
                'occasion_name'=>'Weeding Gifts',
            ]);
            Occasion::create([
                'occasion_name'=>'Thank You Gifts',
            ]);
       
    }
}
