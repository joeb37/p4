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
        $this->addGame('Simpsons Pinball Party', $location_id, '2 tokens per game', '');
        $this->addGame('Getaway: High Speed II', $location_id, '2 tokens per game', '');
        $this->addGame('Ripley\'s Believe it or Not!', $location_id, '2 tokens per game', '');
        $this->addGame('Star Wars Episode I', $location_id, '2 tokens per game', '');
        $this->addGame('Pirates of the Caribbean', $location_id, '2 tokens per game', '');
        $this->addGame('Simpsons Pinball Party', $location_id, '2 tokens per game', '');

        //////////////////////
        // Pinz Entertainment
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Pinz Entertainment')->pluck('id')->first();
        $this->addGame('Walking Dead', $location_id, '2 tokens per game', '');

        //////////////////////
        // Lanes & Games
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Lanes & Games')->pluck('id')->first();
        $this->addGame('Addams Family', $location_id, '2 tokens per game', '');
        $this->addGame('Scared Stiff', $location_id, '2 tokens per game', '');
        $this->addGame('Tron', $location_id, '2 tokens per game', '');
        $this->addGame('Spider-Man', $location_id, '2 tokens per game', '');
        $this->addGame('Iron Man', $location_id, '2 tokens per game', '');
        $this->addGame('X-Men', $location_id, '2 tokens per game', '');
        $this->addGame('Family Guy', $location_id, '2 tokens per game', '');
        $this->addGame('AC/DC', $location_id, '2 tokens per game', '');
        $this->addGame('Simpsons Pinball Party', $location_id, '2 tokens per game', '');

        //////////////////////
        // Barney's Bowlarama
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Barney\'s Bowlarama')->pluck('id')->first();
        $this->addGame('Indianapolis 500', $location_id, '$0.50 per game', '');
        $this->addGame('Game Show', $location_id, '$0.50 per game', '');
        $this->addGame('Whirlwind', $location_id, '$0.50 per game', '');
        $this->addGame('Phantom of the Opera', $location_id, '$0.50 per game', '');
        $this->addGame('Addams Family', $location_id, '$0.50 per game', '');

        //////////////////////
        // Barre Funland
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Barre Funland')->pluck('id')->first();
        $this->addGame('Indianapolis 500', $location_id, '$10.00 play all day', '');
        $this->addGame('Doctor Who', $location_id, '$10.00 play all day', '');
        $this->addGame('Fish Tales', $location_id, '$10.00 play all day', '');
        $this->addGame('Junk Yard', $location_id, '$10.00 play all day', '');
        $this->addGame('Star Wars', $location_id, '$10.00 play all day', '');
        $this->addGame('Bad Cats', $location_id, '$10.00 play all day', '');
        $this->addGame('Jurassic Park', $location_id, '$10.00 play all day', '');
        $this->addGame('Judge Dredd', $location_id, '$10.00 play all day', '');
        $this->addGame('Medieval Madness', $location_id, '$10.00 play all day', '');

        //////////////////////
        // Melvin's
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Melvin\'s')->pluck('id')->first();
        $this->addGame('Walking Dead', $location_id, '$1.00 per game', '');
        $this->addGame('Family Guy', $location_id, '$1.00 per game', '');

        //////////////////////
        // TGI Friday's
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'TGI Friday\'s')->pluck('id')->first();
        $this->addGame('Simpsons Pinball Party', $location_id, '$0.75 per game', '');

        //////////////////////
        // Super Golf
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Super Golf')->pluck('id')->first();
        $this->addGame('Walking Dead', $location_id, '$9.99 play all day','');
        $this->addGame('Family Guy', $location_id, '$9.99 play all day','');
        $this->addGame('Simpsons', $location_id, '$9.99 play all day','');
        $this->addGame('World Cup Soccer', $location_id, '$9.99 play all day','');
        $this->addGame('World Poker Tour', $location_id, '$9.99 play all day','');
        $this->addGame('Wheel of Fortune', $location_id, '$9.99 play all day','');

        //////////////////////
        // Shamble's
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Shamble\'s')->pluck('id')->first();
        $this->addGame('Walking Dead', $location_id, 'Free Play','');
        $this->addGame('Batman', $location_id, 'Free Play','');

        //////////////////////
        // Playland
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Playland')->pluck('id')->first();
        $this->addGame('Walking Dead', $location_id, '2 tokens 1 play; 8 tokens 5 plays','');
        $this->addGame('Monster Bash', $location_id, '2 tokens 1 play; 8 tokens 5 plays','');
        $this->addGame('Medieval Madness', $location_id, '2 tokens 1 play; 8 tokens 5 plays','');
        $this->addGame('Getaway: High Speed II', $location_id, '2 tokens 1 play; 8 tokens 5 plays','');
        $this->addGame('Lost World', $location_id, '2 tokens 1 play; 8 tokens 5 plays','');

        //////////////////////
        // Portsmouth Paintball
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Portsmouth Paintball')->pluck('id')->first();
        $this->addGame('Gladiators', $location_id, '3 tokens per play','');
        $this->addGame('Sopranos', $location_id, '3 tokens per play','');
        $this->addGame('NASCAR', $location_id, '3 tokens per play','');
        $this->addGame('Police Force', $location_id, '3 tokens per play','');

        //////////////////////
        // Chester's
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'Chester\'s')->pluck('id')->first();
        $this->addGame('Spider-Man', $location_id, '$1.00 per play','');

        //////////////////////
        // The Power Station
        //////////////////////
        $location_id = \p4\Location::where('name', '=', 'The Power Station')->pluck('id')->first();
        $this->addGame('Bonebusters', $location_id, '2 tokens per game','');
        $this->addGame('Transporter', $location_id, '2 tokens per game','');
        $this->addGame('Black Knight 2000', $location_id, '2 tokens per game','');
        $this->addGame('No Fear', $location_id, '2 tokens per game','');
        $this->addGame('Jokerz', $location_id, '2 tokens per game','');
        $this->addGame('Wrestlemania', $location_id, '2 tokens per game','');
        $this->addGame('Mousin\' Around', $location_id, '2 tokens per game','');
        $this->addGame('Pool Sharks', $location_id, '2 tokens per game','');
        $this->addGame('NBA', $location_id, '3 tokens per game','');
        $this->addGame('Big Buck Hunter', $location_id, '3 tokens per game','');

    }

    public function addGame($gameName, $location_id, $pricing, $condition) {
        $machine_id = \p4\Machine::where('name', "=", $gameName)->pluck('id')->first();
        DB::table('games')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'location_id' => $location_id,
            'machine_id' => $machine_id,
            'condition' => $condition,
            'pricing' => $pricing,
        ]);
    }

}
