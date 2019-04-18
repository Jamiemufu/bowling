<?php

use Illuminate\Database\Seeder;

class actual extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //actual data
        DB::table('venue')->insert([
            ['match_id' => 1, 'name' => 'Moor Lane Bowling Club'],
            ['match_id' => 1, 'name' => 'Esclusham Bowling Club'],
        ]);

        //match data first
        DB::table('match')->insert([
            'division' => 'Senior County Championship 2014',
            'date' => "1st June 2014",
            'home_team' => 'Warick & Worcester',
            'away_team' => 'Wales',
            'home_venue' => 'Moor Lane Bowling Club',
            'away_venue' => 'Esclusham Bowling Club',
        ]);
        
        
        //match id matching matches and random scores
        DB::table('match_results')->insert([
            'match_id' => 1,
            'home_score' => 461,
            'away_score' => 434
        ]);

        //add players
        DB::table('player')->insert([
            ['first_name' => 'Ross','last_name' => 'Dunkley', 'club' => 'King George V'],
            ['first_name' => 'Darren','last_name' => 'Williams', 'club' => 'Conwy'],
            ['first_name' => 'Neil' ,'last_name' => 'Clarke', 'club' => 'Tamworth in Arden'],
            ['first_name' => 'Darren' ,'last_name' => 'Lacey', 'club' => 'Esclusham'],
            ['first_name' => 'Ryan' ,'last_name' => 'Prosser', 'club' => 'King George V'],
            ['first_name' => 'Trevor' ,'last_name' => 'heath', 'club' => 'Abergele'],
        ]);

        //add player data for match
        DB::table('player_game')->insert([
            ['score' => 21, 'match_id' => 1, 'player_id' => 1, 'home_away' => 'home'],
            ['score' => 9, 'match_id' => 1, 'player_id' => 2, 'home_away' => 'away'],
            ['score' => 21, 'match_id' => 1, 'player_id' => 3, 'home_away' => 'home'],
            ['score' => 19, 'match_id' => 1, 'player_id' => 4, 'home_away' => 'away'],
            ['score' => 21, 'match_id' => 1, 'player_id' => 5, 'home_away' => 'home'],
            ['score' => 15, 'match_id' => 1, 'player_id' => 6, 'home_away' => 'away'],
        ]);

        //add player round played
        DB::table('rounds')->insert([
            ["1" => 21, 'player_id' => 1, 'match_id' => 1],
            ["1" => 9, 'player_id' => 2, 'match_id' => 1],
        ]);

        //add player round played
        DB::table('rounds')->insert([
            ["2" => 21, "player_id" => 3, "match_id" => 1],
            ["2" => 19, "player_id" => 4, "match_id" => 1],
        ]);

        //add player round played
        DB::table('rounds')->insert([
            ["3" => 21, "player_id" => 5, "match_id" => 1],
            ["3" => 15, "player_id" => 6, "match_id" => 1],
        ]);

    }
}
