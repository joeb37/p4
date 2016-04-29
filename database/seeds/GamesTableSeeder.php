<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///////////////////
        // Acton Bowladrome
        ///////////////////
        $location_id = \p4\Location::where('name', '=', 'Acton Bowladrome')->pluck('id')->first();
        $machine_id = \p4\Machine::where('name', "=", 'Terminator 3: Rise of the Machines')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'The Getaway: High Speed II')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'Ripley\'s Belive it or Not!')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'Star Wars Episode I')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'Pirates of the Caribbean')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        //////////////////////
        // Pinz Entertainment
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Pinz Entertainment')->pluck('id')->first();
        $machine_id = \p4\Machine::where('name', "=", 'The Walking Dead')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        //////////////////////
        // Lanes & Games
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Lanes & Games')->pluck('id')->first();
        $machine_id = \p4\Machine::where('name', "=", 'The Addams Family')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'Scared Stiff')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'Tron')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'Spider-Man')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'Iron Man')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'X-Men')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'Family Guy')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'AC/DC')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

        $machine_id = \p4\Machine::where('name', "=", 'The Simpsons Pinball Party')->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => '',
            'pricing' => '2 tokens per game',
        ]);

    }
}
