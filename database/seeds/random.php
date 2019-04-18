<?php

use Illuminate\Database\Seeder;

class random extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Basic starting random data

        //counter for player_id (FK)
        $count = 0;
    
        //12 matches initial matches data
        for($i = 1; $i < 13; $i++)
        {

            //2 venues for each match
            for($z = 0; $z <= 1; $z++) {
                DB::table('venue')->insert([
                    'name' => Str::random(10)
                ]);
            }

            DB::table('match')->insert([
                'division' => Str::random(15),
                'date' => "2019/$i/$i",
                'home_team' => Str::random(8),
                'away_team' => Str::random(8),
                'home_venue' => Str::random(8),
                'away_venue' => Str::random(8),
            ]);
            
            
            //match id matching matches and random scores
            DB::table('match_results')->insert([
                //FK
                'match_id' => $i,
                'home_score' => rand(200, 400),
                'away_score' => rand(200, 400),
                
            ]);
            
            //12 home players per match
            for ($x=1; $x <= 12; $x++) 
            { 
                $count+=1;
                DB::table('player')->insert([
                    'first_name' => Str::random(5),
                    'last_name' => Str::random(5),
                    'club' => Str::random(5)
                ]);

                DB::table('player_game')->insert([
                    'score' => rand(10, 30),
                    'match_id' => $i,
                    'player_id' => $count,
                    'home_away' => 'home'
                ]);
            }

            //12 away players per match
            for ($y=13; $y <= 24; $y++) 
            { 
                $count+=1;
                DB::table('player')->insert([
                    'first_name' => Str::random(5),
                    'last_name' => Str::random(5),
                    'club' => Str::random(5)
                ]);

                DB::table('player_game')->insert([
                    'score' => rand(10, 30),
                    'match_id' => $i,
                    'player_id' => $count,
                    'home_away' => 'away'
                ]);
            }
               
        }
    }
}
