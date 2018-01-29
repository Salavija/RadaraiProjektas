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

        
        $this->call(radarsSeeder::class);
        $this->call(driversSeeder::class);
    }
}
