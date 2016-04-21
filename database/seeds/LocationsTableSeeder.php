<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Acton Bowladrome',
        'street_address' => '257 Main St',
        'city' => 'Acton',
        'state' => 'MA',
        'zip' => '01720',
        'business_type' => 'Bowling Alley',
        'payment_type' => 'Tokens',
        'real' => true,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Pinz Entertainment',
        'street_address' => '110 S Main St',
        'city' => 'Milford',
        'state' => 'MA',
        'zip' => '01757',
        'business_type' => 'Bowling Alley',
        'payment_type' => 'Tokens',
        'real' => true,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Lanes & Games',
        'street_address' => '195 Concord Turnpike',
        'city' => 'Cambridge',
        'state' => 'MA',
        'zip' => '02140',
        'business_type' => 'Bowling Alley',
        'payment_type' => 'Tokens',
        'real' => true,
        ]);
        /*
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => '',
        'street_address' => '',
        'city' => '',
        'state' => '',
        'zip' => '',
        'business_type' => '',
        'payment_type' => '',
        'real' => true,
        ]);
        */
    }
}
