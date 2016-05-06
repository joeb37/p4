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
        'business_type' => 'Bowl',
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
        'business_type' => 'Bowl',
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
        'business_type' => 'Bowl',
        'payment_type' => 'Tokens',
        'real' => true,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Barney\'s Bowlarama',
        'street_address' => '21 Eddy Street',
        'city' => 'Springfield',
        'state' => 'MA',
        'zip' => '01101',
        'business_type' => 'Bowl',
        'payment_type' => 'BillsCoins',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Barre Funland',
        'street_address' => '1888 Constitution Ave',
        'city' => 'Barre',
        'state' => 'MA',
        'zip' => '01005',
        'business_type' => 'Arcade',
        'payment_type' => 'OnePrice',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Melvin\'s',
        'street_address' => '32 Byron Ave',
        'city' => 'Williamstown',
        'state' => 'MA',
        'zip' => '01267',
        'business_type' => 'Bar',
        'payment_type' => 'BillsCoins',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'TGI Friday\'s',
        'street_address' => '100 Friend Street',
        'city' => 'Sudbury',
        'state' => 'MA',
        'zip' => '01776',
        'business_type' => 'Restaurant',
        'payment_type' => 'BillsCoins',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Super Golf',
        'street_address' => '80 Worden Rd',
        'city' => 'Pittsfield',
        'state' => 'MA',
        'zip' => '01201',
        'business_type' => 'EntCent',
        'payment_type' => 'OnePrice',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Shamble\'s',
        'street_address' => '409 Browning Rd',
        'city' => 'Hyannis',
        'state' => 'MA',
        'zip' => '02601',
        'business_type' => 'OtherAll',
        'payment_type' => 'Free',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Playland',
        'street_address' => '80 Fontenbleu Ave',
        'city' => 'Concord',
        'state' => 'NH',
        'zip' => '03301',
        'business_type' => 'Arcade',
        'payment_type' => 'Tokens',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Portsmouth Paintball',
        'street_address' => '144 Corinitian Drive',
        'city' => 'Portsmouth',
        'state' => 'NH',
        'zip' => '03801',
        'business_type' => 'OtherAll',
        'payment_type' => 'Tokens',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Chester\'s',
        'street_address' => '100 Carborundum St',
        'city' => 'Manchester',
        'state' => 'NH',
        'zip' => '03101',
        'business_type' => 'Bar',
        'payment_type' => 'BillsCoins',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Power Station',
        'street_address' => '7414 Overlook Highway',
        'city' => 'Nashua',
        'state' => 'NH',
        'zip' => '03060',
        'business_type' => 'Arcade',
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
