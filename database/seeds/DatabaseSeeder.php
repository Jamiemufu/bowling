<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UsersTableSeeder::class);
        //matches data
        for($i = 1; $i < 13; $i++)
        {
            DB::table('matches')->insert([
                'division' => Str::random(15),
                'match_date' => "2019/$i/$i",
                'home_team' => Str::random(8),
                'away_team' => Str::random(8)
            ]);
            
            DB::table('match_details')->insert([
                'home_score' => rand(200, 400),
                'match_id' => $i,
                'away_score' => rand(200, 400)
            ]);

            for ($x=1; $x < 28; $x++) 
            { 
                DB::table('players')->insert([
                    'first_name' => Str::random(10),
                    'last_nameb' => Str::random(10),
                    'club' => Str::random(10)
                ]);
                //home player seed
                DB::table('player_game')->insert([
                    'player_name' =>  Str::random(10),
                    'Player_club' => Str::random(10),
                    'player_homeaway' => 'away',
                    'match_id' => $x
                ]);
            }
            
        }
       

       
        //home player seed
       
    }
}
