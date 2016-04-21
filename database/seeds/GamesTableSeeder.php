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
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Getaway: High Speed II',
        'manufacturer' => 'Williams',
        'year' => 1992,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'World Cup Soccer',
        'manufacturer' => 'Bally',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Pioneer',
        'manufacturer' => 'Gottlieb',
        'year' => 1976,
        'players' => 2,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Eye of the Tiger',
        'manufacturer' => 'Gottlieb',
        'year' => 1978,
        'players' => 2,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Flash',
        'manufacturer' => 'Williams',
        'year' => 1979,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Incredible Hulk',
        'manufacturer' => 'Gottlieb',
        'year' => 1980,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Lucky 7',
        'manufacturer' => 'Williams',
        'year' => 1978,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Whirlwind',
        'manufacturer' => 'Williams',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Silver Slugger',
        'manufacturer' => 'Gottlieb',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Game Show',
        'manufacturer' => 'Bally',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'THe Phantom of the Opera',
        'manufacturer' => 'Data East',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Pool Sharks',
        'manufacturer' => 'Bally',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Rollergams',
        'manufacturer' => 'Williams',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Vegas',
        'manufacturer' => 'Gottlieb',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Deadly Weapon',
        'manufacturer' => 'Gottlieb',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Diner',
        'manufacturer' => 'Williams',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Radical!',
        'manufacturer' => 'Bally',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Simpsons',
        'manufacturer' => 'Data East',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Title Fight',
        'manufacturer' => 'Gottlieb',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Dr. Dude',
        'manufacturer' => 'Bally',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Bugs Bunny\'s Birthday Ball',
        'manufacturer' => 'Bally',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Car Hop',
        'manufacturer' => 'Gottlieb',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Hoops',
        'manufacturer' => 'Gottlieb',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Machine: Bride of Pinbot',
        'manufacturer' => 'Williams',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Harley Davidson',
        'manufacturer' => 'Bally',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Cactus Jack\'s',
        'manufacturer' => 'Gottlieb',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Gilligan\'s Island',
        'manufacturer' => 'Bally',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Terminator 2: Judgement Day',
        'manufacturer' => 'Williams',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Class of 1812',
        'manufacturer' => 'Gottlieb',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Hurricane',
        'manufacturer' => 'Williams',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Party Zone',
        'manufacturer' => 'Bally',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Surf \'n Safari',
        'manufacturer' => 'Gottlieb',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Operation Thunder',
        'manufacturer' => 'Gottlieb',
        'year' => 1992,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Addams Family',
        'manufacturer' => 'Bally',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Hook',
        'manufacturer' => 'Data East',
        'year' => 1991,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Super Mario Bros. Mushroom World',
        'manufacturer' => 'Gottlieb',
        'year' => 1992,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Black Rose',
        'manufacturer' => 'Bally',
        'year' => 1992,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Lethal Weapon 3',
        'manufacturer' => 'Data East',
        'year' => 1992,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Doctor Who',
        'manufacturer' => 'Bally',
        'year' => 1992,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'A.G. Soccer-Ball',
        'manufacturer' => 'Alvin G. & Co.',
        'year' => 1992,
        'players' => 2,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Cue Ball Wizard',
        'manufacturer' => 'Gottlieb',
        'year' => 1992,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Fish Tales',
        'manufacturer' => 'Williams',
        'year' => 1992,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'U.S.A. Football',
        'manufacturer' => 'Alvin G. & Co.',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Al\'s Garage Band Goes on a World Tour',
        'manufacturer' => 'Alvin G. & Co.',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Creature from the Black Lagoon',
        'manufacturer' => 'Bally',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Star Wars',
        'manufacturer' => 'Data East',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'White Water',
        'manufacturer' => 'Williams',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Adventures of Rocky and Bullwinkle and Friends',
        'manufacturer' => 'Data East',
        'year' => 1992,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Street Fighter II',
        'manufacturer' => 'Capcom',
        'year' => 1992,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Bram Stoker\'s Dracula',
        'manufacturer' => 'Williams',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Twilight Zone',
        'manufacturer' => 'Bally',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Tee\'d Off',
        'manufacturer' => 'Gottlieb',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Jurassic Park',
        'manufacturer' => 'Data East',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Indiana Jones: The Pinball Adventure',
        'manufacturer' => 'Williams',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Judge Dredd',
        'manufacturer' => 'Bally',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Mystery Castle',
        'manufacturer' => 'Alvin G. & Co.',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Punchy the Clown',
        'manufacturer' => 'Alvin G. & Co.',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Last Action Hero',
        'manufacturer' => 'Data East',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Wipe Out',
        'manufacturer' => 'Gottlieb',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Gladiators',
        'manufacturer' => 'Gottlieb',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Pistol Poker',
        'manufacturer' => 'Alvin G. & Co.',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Star Trek: The Next Generation',
        'manufacturer' => 'Williams',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Tales from the Crypt',
        'manufacturer' => 'Data East',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Demolition Man',
        'manufacturer' => 'Williams',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Popeye Saves the Earth',
        'manufacturer' => 'Bally',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Who\'s Tommy Pinball Wizard',
        'manufacturer' => 'Data East',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'World Challenge Soccer',
        'manufacturer' => 'Gottlieb',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Rescue 911',
        'manufacturer' => 'Gottlieb',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'WWF Royal Rumble',
        'manufacturer' => 'Data East',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Flintstones',
        'manufacturer' => 'Williams',
        'year' => 1993,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Corvette',
        'manufacturer' => 'Bally',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Maverick',
        'manufacturer' => 'Data East',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Freddy a Nightmare on Elm Street`',
        'manufacturer' => 'Gottlieb',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Red and Ted\'s Roadshow',
        'manufacturer' => 'Williams',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Shadow',
        'manufacturer' => 'Bally',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Mary Shelley\'s Frankenstein',
        'manufacturer' => 'Sega',
        'year' => 1994,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Apollo 13',
        'manufacturer' => 'Sega',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Baywatch',
        'manufacturer' => 'Sega',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Shaq Attaq',
        'manufacturer' => 'Gottlieb',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Dirty Harry',
        'manufacturer' => 'Williams',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Stargate',
        'manufacturer' => 'Gottlieb',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Theatre of Magic',
        'manufacturer' => 'Bally',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'No Fear',
        'manufacturer' => 'Williams',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Big Hurt',
        'manufacturer' => 'Gottlieb',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Indianapolis 500',
        'manufacturer' => 'Bally',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Batman Forever',
        'manufacturer' => 'Sega',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Johnny Mnemonic',
        'manufacturer' => 'Williams',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Whodunnit?',
        'manufacturer' => 'Bally',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Jackbot',
        'manufacturer' => 'Williams',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Strikes N\' Spares',
        'manufacturer' => 'Gottlieb',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Waterworld',
        'manufacturer' => 'Gottlieb',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Congo',
        'manufacturer' => 'Williams',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Attack from Mars',
        'manufacturer' => 'Bally',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Mario Andretti',
        'manufacturer' => 'Gottlieb',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Airborne',
        'manufacturer' => 'Capcom',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'GoldenEye',
        'manufacturer' => 'Sega',
        'year' => 1995,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Safecracker',
        'manufacturer' => 'Bally',
        'year' => 1996,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Barb Wire',
        'manufacturer' => 'Gottlieb',
        'year' => 1996,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Twister',
        'manufacturer' => 'Sega',
        'year' => 1996,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Break Shot',
        'manufacturer' => 'Capcom',
        'year' => 1996,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Tales of the Arabian Nights',
        'manufacturer' => 'Williams',
        'year' => 1996,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Scared Stiff',
        'manufacturer' => 'Bally',
        'year' => 1996,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Flipper Football',
        'manufacturer' => 'Capcom',
        'year' => 1996,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Independence Day',
        'manufacturer' => 'Sega',
        'year' => 1996,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Junk Yard',
        'manufacturer' => 'Williams',
        'year' => 1996,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Space Jam',
        'manufacturer' => 'Sega',
        'year' => 1996,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'NBA Fastbreak',
        'manufacturer' => 'Bally',
        'year' => 1997,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Star Wars',
        'manufacturer' => 'Sega',
        'year' => 1997,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Lost World',
        'manufacturer' => 'Sega',
        'year' => 1997,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Medieval Madness',
        'manufacturer' => 'Williams',
        'year' => 1997,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The X Files',
        'manufacturer' => 'Sega',
        'year' => 1997,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Cirqus Voltaire',
        'manufacturer' => 'Bally',
        'year' => 1997,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'No Good Gofers',
        'manufacturer' => 'Williams',
        'year' => 1997,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Starship Troopers',
        'manufacturer' => 'Sega',
        'year' => 1997,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Viper Night Drivin\'',
        'manufacturer' => 'Sega',
        'year' => 1998,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Champion Pub',
        'manufacturer' => 'Bally',
        'year' => 1997,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Lost In Space',
        'manufacturer' => 'Sega',
        'year' => 1998,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Monster Bash',
        'manufacturer' => 'Williams',
        'year' => 1998,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Godzilla',
        'manufacturer' => 'Sega',
        'year' => 1998,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Cactus Canyon',
        'manufacturer' => 'Bally',
        'year' => 1998,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Revenge From Mars',
        'manufacturer' => 'Williams',
        'year' => 1999,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'South Park',
        'manufacturer' => 'Sega',
        'year' => 1998,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Star Wars Episode I',
        'manufacturer' => 'Williams',
        'year' => 1999,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Harley-Davidson',
        'manufacturer' => 'Sega',
        'year' => 1999,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Striker Xtreme',
        'manufacturer' => 'Stern',
        'year' => 1999,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Sharkey\'s Shootout',
        'manufacturer' => 'Stern',
        'year' => 2000,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'High Roller Casino',
        'manufacturer' => 'Stern',
        'year' => 2001,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Austin Powers',
        'manufacturer' => 'Stern',
        'year' => 2001,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Monopoly',
        'manufacturer' => 'Stern',
        'year' => 2001,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Roller Coaster Tycoon',
        'manufacturer' => 'Stern',
        'year' => 2002,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Simpsons Pinball Party',
        'manufacturer' => 'Stern',
        'year' => 2003,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Terminator 3: Rise of the Machines',
        'manufacturer' => 'Stern',
        'year' => 2003,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Lord of the Rings',
        'manufacturer' => 'Stern',
        'year' => 2003,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Elvis',
        'manufacturer' => 'Stern',
        'year' => 2004,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Ripley\'s Belive it or Not!',
        'manufacturer' => 'Stern',
        'year' => 2004,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Sopranos',
        'manufacturer' => 'Stern',
        'year' => 2005,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'NASCAR',
        'manufacturer' => 'Stern',
        'year' => 2005,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'World Poker Tour',
        'manufacturer' => 'Stern',
        'year' => 2006,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Pirates of the Caribbean',
        'manufacturer' => 'Stern',
        'year' => 2006,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Family Guy',
        'manufacturer' => 'Stern',
        'year' => 2007,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Spider-Man',
        'manufacturer' => 'Stern',
        'year' => 2007,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Wheel of Fortune',
        'manufacturer' => 'Stern',
        'year' => 2007,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Indiana Jones',
        'manufacturer' => 'Stern',
        'year' => 2008,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Batman',
        'manufacturer' => 'Stern',
        'year' => 2008,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'CSI',
        'manufacturer' => 'Stern',
        'year' => 2008,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => '24',
        'manufacturer' => 'Stern',
        'year' => 2009,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'NBA',
        'manufacturer' => 'Stern',
        'year' => 2009,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Shrek',
        'manufacturer' => 'Stern',
        'year' => 2008,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Iron Man',
        'manufacturer' => 'Stern',
        'year' => 2010,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Big Buck Hunter',
        'manufacturer' => 'Stern',
        'year' => 2010,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Avatar',
        'manufacturer' => 'Stern',
        'year' => 2010,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Rolling Stones',
        'manufacturer' => 'Stern',
        'year' => 2011,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Tron',
        'manufacturer' => 'Stern',
        'year' => 2011,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Transformers',
        'manufacturer' => 'Stern',
        'year' => 2011,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'AC/DC',
        'manufacturer' => 'Stern',
        'year' => 2012,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'X-Men',
        'manufacturer' => 'Stern',
        'year' => 2012,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Avengers',
        'manufacturer' => 'Stern',
        'year' => 2012,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'The Walking Dead',
        'manufacturer' => 'Stern',
        'year' => 2014,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Star Trek',
        'manufacturer' => 'Stern',
        'year' => 2013,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Game of Thrones',
        'manufacturer' => 'Stern',
        'year' => 2015,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Metallica',
        'manufacturer' => 'Stern',
        'year' => 2013,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'KISS',
        'manufacturer' => 'Stern',
        'year' => 2015,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Mustang',
        'manufacturer' => 'Stern',
        'year' => 2014,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Wrestlemania',
        'manufacturer' => 'Stern',
        'year' => 2015,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Mousin\' Around',
        'manufacturer' => 'Bally',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Lights...Camera...Action!',
        'manufacturer' => 'Gottlieb',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Riverboat Gambler',
        'manufacturer' => 'Williams',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Bad Cats',
        'manufacturer' => 'Williams',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Elvira and the Party Monsters',
        'manufacturer' => 'Bally',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Monday Night Football',
        'manufacturer' => 'Data East',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Police Force',
        'manufacturer' => 'Williams',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Bonebusters',
        'manufacturer' => 'Gottlieb',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Transporter',
        'manufacturer' => 'Bally',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Hot Shots',
        'manufacturer' => 'Gottlieb',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Black Night 2000',
        'manufacturer' => 'Williams',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Atlantis',
        'manufacturer' => 'Bally',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Big House',
        'manufacturer' => 'Gottlieb',
        'year' => 1989,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Jokerz',
        'manufacturer' => 'Williams',
        'year' => 1988,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Excalibur',
        'manufacturer' => 'Gottlieb',
        'year' => 1988,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Taxi',
        'manufacturer' => 'Williams',
        'year' => 1988,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Swords of Fury',
        'manufacturer' => 'Williams',
        'year' => 1988,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Robo-War',
        'manufacturer' => 'Gottlieb',
        'year' => 1988,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Blackwater 100',
        'manufacturer' => 'Bally',
        'year' => 1988,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'TX Sector',
        'manufacturer' => 'Gottlieb',
        'year' => 1987,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Diamond Lady',
        'manufacturer' => 'Gottlieb',
        'year' => 1987,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Cyclone',
        'manufacturer' => 'Williams',
        'year' => 1988,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Escape from the Lost World',
        'manufacturer' => 'Bally',
        'year' => 1988,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Victory',
        'manufacturer' => 'Gottlieb',
        'year' => 1987,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Arena',
        'manufacturer' => 'Gottlieb',
        'year' => 1987,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Party Animal',
        'manufacturer' => 'Bally',
        'year' => 1987,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Sprink Break',
        'manufacturer' => 'Gottlieb',
        'year' => 1987,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'F-14 Tomcat',
        'manufacturer' => 'Williams',
        'year' => 1987,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Monte Carlo',
        'manufacturer' => 'Gottlieb',
        'year' => 1986,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Gold Wings',
        'manufacturer' => 'Gottlieb',
        'year' => 1986,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Genesis',
        'manufacturer' => 'Gottlieb',
        'year' => 1986,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Black Belt',
        'manufacturer' => 'Bally',
        'year' => 1986,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Rock',
        'manufacturer' => 'Gottlieb',
        'year' => 1986,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Raven',
        'manufacturer' => 'Gottlieb',
        'year' => 1986,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Beat the Clock',
        'manufacturer' => 'Bally',
        'year' => 1985,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Eight Ball Champ',
        'manufacturer' => 'Bally',
        'year' => 1985,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Comet',
        'manufacturer' => 'Williams',
        'year' => 1985,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Space Shuttle',
        'manufacturer' => 'Williams',
        'year' => 1984,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Funhouse',
        'manufacturer' => 'Williams',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Back to the Future',
        'manufacturer' => 'Data East',
        'year' => 1990,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Spirit',
        'manufacturer' => 'Gottlieb',
        'year' => 1982,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Devil\'s Dare',
        'manufacturer' => 'Gottlieb',
        'year' => 1982,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Black Hole',
        'manufacturer' => 'Gottlieb',
        'year' => 1981,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Split Second',
        'manufacturer' => 'Stern',
        'year' => 1981,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Fathom',
        'manufacturer' => 'Bally',
        'year' => 1981,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Sinbad',
        'manufacturer' => 'Gottlieb',
        'year' => 1977,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Star Trek',
        'manufacturer' => 'Bally',
        'year' => 1979,
        'players' => 4,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Gold Strike',
        'manufacturer' => 'Gottlieb',
        'year' => 1975,
        'players' => 1,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'King Pin',
        'manufacturer' => 'Gottlieb',
        'year' => 1975,
        'players' => 1,
        'image_url' => '',
        ]);
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'King Kool',
        'manufacturer' => 'Gottlieb',
        'year' => 1972,
        'players' => 2,
        'image_url' => '',
        ]);
    }
}
