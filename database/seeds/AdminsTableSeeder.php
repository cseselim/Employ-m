<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create a new admin when seeding
        $admin = new Admin();
        $admin->first_name = 'Selim';
        $admin->last_name = 'Reza';
        $admin->username = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('password');
        $admin->picture = 'no_image.png';
        $admin->save();
    }
}
