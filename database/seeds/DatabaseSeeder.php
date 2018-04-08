<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(AdminTableSeeder::class);
         $this->call(EcategorySeeder::class);
         $this->call(OccasionSeeder::class);
         factory(\App\Eproduct::class,50)->create();
    }
}
