<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class radarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	[
        		'date' => Carbon::create(2018, 1, 15, 20, 25, 14),
        		'number' =>'ASC214',
        		'distance' => '1000',
        		'time' => '3',
        		'driver_id' =>1,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now(),
        	],
        	        	[
        		'date' => Carbon::create(2018, 1, 10, 21, 25, 14),
        		'number' =>'BSC232',
        		'distance' => '800',
        		'time' => '4',
        		'driver_id' => 2,
        		 'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now(),
        	],
        	        	[
        		'date' => Carbon::create(2018, 1, 11, 20, 25, 14),
        		'number' =>'ISC214',
        		'distance' => '650',
        		'time' => '2',
        		'driver_id' => 3,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now(),
        	]
        ];
        foreach($data as $value){
        	DB::table('radars')->insert($value);
        }
    }
}