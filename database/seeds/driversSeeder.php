<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Driver;


class driversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Povilas Povilaitis',
                'city' => 'Ukmerge',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jonas Anyzius',
                'city' => 'Telsiai',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Marija Magdelena',
                'city' => 'Marijanpoles',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach($data as $value)
        {
            DB::table('drivers')->insert($value);
        }
    }
}