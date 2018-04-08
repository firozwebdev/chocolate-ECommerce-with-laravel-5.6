<?php

use App\Ecategory;
use Illuminate\Database\Seeder;

class EcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) {
            Ecategory::create([
                'category_name'=>'Almond'. $i,
                'category_description'=>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde ',
                'publication_status' => 1
            ]);
        }
    }
}
