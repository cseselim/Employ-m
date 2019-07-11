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
         $this->call(GendersTableSeeder::class);
         $this->call(AdminsTableSeeder::class);
         $this->call(CityTableSeeder::class);
         $this->call(CountryTableSeeder::class);
         $this->call(StateTableSeeder::class);
         $this->call(DivisionTableSeeder::class);
         $this->call(DepartmentTableSeeder::class);
         $this->call(SalaryTableSeeder::class);
    }
}
