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
        'street_address' => '21 Raritan Road',
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
        'street_address' => '80 Hyperion Rd',
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
        'street_address' => '144 Corinthian Drive',
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
        'street_address' => '7414 Oberon Highway',
        'city' => 'Nashua',
        'state' => 'NH',
        'zip' => '03060',
        'business_type' => 'Arcade',
        'payment_type' => 'Tokens',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Gas Works',
        'street_address' => '7878 Vroom Rd',
        'city' => 'Warwick',
        'state' => 'RI',
        'zip' => '02886',
        'business_type' => 'Bar',
        'payment_type' => 'BillsCoins',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Federal Lanes',
        'street_address' => '42 Weaver Rd',
        'city' => 'Pawtucket',
        'state' => 'RI',
        'zip' => '02860',
        'business_type' => 'Bowl',
        'payment_type' => 'Tokens',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Shipley\'s',
        'street_address' => '510 Chauncey St',
        'city' => 'Cranston',
        'state' => 'RI',
        'zip' => '02910',
        'business_type' => 'OtherAll',
        'payment_type' => 'Tokens',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Family Funland',
        'street_address' => '711 Prince George Pl',
        'city' => 'Newport',
        'state' => 'RI',
        'zip' => '02840',
        'business_type' => 'EntCent',
        'payment_type' => 'Tokens',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Highway Bowl',
        'street_address' => '313 Yodar St',
        'city' => 'Woonsocket',
        'state' => 'RI',
        'zip' => '02895',
        'business_type' => 'Bowl',
        'payment_type' => 'Tokens',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Sherwood',
        'street_address' => '808 Bayonne Ave',
        'city' => 'Narragansett',
        'state' => 'RI',
        'zip' => '02882',
        'business_type' => 'OtherAll',
        'payment_type' => 'OnePrice',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Fun Bowl Windsor',
        'street_address' => '71 Charlemagne Road',
        'city' => 'Windsor',
        'state' => 'CT',
        'zip' => '06006',
        'business_type' => 'Bowl',
        'payment_type' => 'BillsCoins',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Fairfield Cinema 88',
        'street_address' => '2120 Route 88',
        'city' => 'Fairfield',
        'state' => 'CT',
        'zip' => '06824',
        'business_type' => 'OtherAll',
        'payment_type' => 'BillsCoins',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Hoffman\'s',
        'street_address' => '50 Carbonara St',
        'city' => 'Mystic',
        'state' => 'CT',
        'zip' => '06355',
        'business_type' => 'Other21Plus',
        'payment_type' => 'BillsCoins',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Shumway\'s',
        'street_address' => '1877 McKinley Ave',
        'city' => 'Norwich',
        'state' => 'CT',
        'zip' => '06360',
        'business_type' => 'OtherAll',
        'payment_type' => 'Tokens',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Game-a-Rama',
        'street_address' => '99 Old Forge St',
        'city' => 'New Britain',
        'state' => 'CT',
        'zip' => '06050',
        'business_type' => 'EntCent',
        'payment_type' => 'Tokens',
        'real' => false,
        ]);
        DB::table('locations')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'El Dorado',
        'street_address' => '909 Commercial Ave',
        'city' => 'Vernon',
        'state' => 'CT',
        'zip' => '06066',
        'business_type' => 'Other21Plus',
        'payment_type' => 'BillsCoins',
        'real' => false,
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
