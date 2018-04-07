<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'admin_name' => 'Sabuz',
            'admin_email_address' => 'smskushtia@gmail.com',
            'admin_password' => md5(123456),
            'access_label' => 1,
        ]);
    }
}
