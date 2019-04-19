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
        

        //game data first
        DB::table('games')->insert([
            'division' => 'Senior County Championship 2014',
            'date' => "1st June 2014",
            'home_team' => 'Warick & Worcester',
            'away_team' => 'Wales',
            'home_venue' => 'Moor Lane Bowling Club',
            'away_venue' => 'Esclusham Bowling Club',
            'home_score' => 461,
            'away_score' => 434,
        ]);
        
    
        //add players

        //first venue first games
        DB::table('players')->insert([
            ['first_name' => 'Ross','last_name' => 'Dunkley', 'club' => 'King George V'],
            ['first_name' => 'Darren','last_name' => 'Williams', 'club' => 'Conwy'],
            ['first_name' => 'Neil' ,'last_name' => 'Clarke', 'club' => 'Tamworth in Arden'],
            ['first_name' => 'Darren' ,'last_name' => 'Lacey', 'club' => 'Esclusham'],
            ['first_name' => 'Ryan' ,'last_name' => 'Prosser', 'club' => 'King George V'],
            ['first_name' => 'Trevor' ,'last_name' => 'heath', 'club' => 'Abergele'],
            ['first_name' => 'Steve' ,'last_name' => 'Freer', 'club' => 'Boldmere St Mich'],
            ['first_name' => 'Graham' ,'last_name' => 'Hunt', 'club' => 'Conwy'],
            ['first_name' => 'Pete' ,'last_name' => 'Dunkley', 'club' => 'Selly Park'],
            ['first_name' => 'Dave' ,'last_name' => 'Jones', 'club' => 'Esclusham'],
            ['first_name' => 'Simon' ,'last_name' => 'Trentham', 'club' => 'Boldmere St Mich'],
            ['first_name' => 'Leighton' ,'last_name' => 'Roberts', 'club' => 'Eschlusham'],
            ['first_name' => 'Tom' ,'last_name' => 'Pritchard', 'club' => 'King George V'],
            ['first_name' => 'Keith' ,'last_name' => 'Bailey', 'club' => 'Beaumaris'],
            ['first_name' => 'Jason' ,'last_name' => 'Galvin', 'club' => 'King Goerge V'],
            ['first_name' => 'Lewis' ,'last_name' => 'Scott', 'club' => 'St Asaph'],
            ['first_name' => 'Greg' ,'last_name' => 'Smith', 'club' => 'WBFSC'],
            ['first_name' => 'Chris' ,'last_name' => 'Slater', 'club' => 'Rhos Park'],
            ['first_name' => 'John' ,'last_name' => 'Palmer', 'club' => 'Kings Heath Park'],
            ['first_name' => 'Ivor' ,'last_name' => 'Jones', 'club' => 'Rhos Park'],
            ['first_name' => 'Mark' ,'last_name' => 'Denman', 'club' => 'Boldmere St Mich'],
            ['first_name' => 'Craig' ,'last_name' => 'Griffiths', 'club' => 'Esclusham'],
            ['first_name' => 'Phil' ,'last_name' => 'Clinton', 'club' => 'George'],
            ['first_name' => 'Peter' ,'last_name' => 'Jones', 'club' => 'Conwy'],
            ]);

        //add player data for games
        DB::table('player_games')->insert([
            ['score' => 21, 'game_id' => 1, 'player_id' => 1, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 1],
            ['score' => 9, 'game_id' => 1, 'player_id' => 2, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 1],
            ['score' => 21, 'game_id' => 1, 'player_id' => 3, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 2],
            ['score' => 19, 'game_id' => 1, 'player_id' => 4, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 2],
            ['score' => 21, 'game_id' => 1, 'player_id' => 5, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 3],
            ['score' => 15, 'game_id' => 1, 'player_id' => 6, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 3],
            ['score' => 16, 'game_id' => 1, 'player_id' => 7, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 4],
            ['score' => 21, 'game_id' => 1, 'player_id' => 8, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 4],
            ['score' => 20, 'game_id' => 1, 'player_id' => 9, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 5],
            ['score' => 21, 'game_id' => 1, 'player_id' => 10, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 5],
            ['score' => 21, 'game_id' => 1, 'player_id' => 11, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 6],
            ['score' => 19, 'game_id' => 1, 'player_id' => 12, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 6],
            ['score' => 21, 'game_id' => 1, 'player_id' => 13, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 7],
            ['score' => 13, 'game_id' => 1, 'player_id' => 14, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 7],
            ['score' => 21, 'game_id' => 1, 'player_id' => 15, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 8],
            ['score' => 20, 'game_id' => 1, 'player_id' => 16, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 8],
            ['score' => 21, 'game_id' => 1, 'player_id' => 17, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 9],
            ['score' => 19, 'game_id' => 1, 'player_id' => 18, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 9],
            ['score' => 15, 'game_id' => 1, 'player_id' => 19, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 10],
            ['score' => 21, 'game_id' => 1, 'player_id' => 20, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 10],
            ['score' => 15, 'game_id' => 1, 'player_id' => 21, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 11],
            ['score' => 21, 'game_id' => 1, 'player_id' => 22, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 11],
            ['score' => 21, 'game_id' => 1, 'player_id' => 23, 'home_away' => 'home', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 12],
            ['score' => 8, 'game_id' => 1, 'player_id' => 24, 'home_away' => 'away', 'venue_played' => 'Moor Lane Bowling Club', 'round_played' => 12],
        ]);

        //SECOND venue first games
        DB::table('players')->insert([
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ['first_name' => Str::random(5),'last_name' => Str::random(5), 'club' => Str::random(5)],
            ]);

        //add player data for games
        DB::table('player_games')->insert([
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 25, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 1],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 26, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 1],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 28, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 2],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 27, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 2],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 29, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 3],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 30, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 3],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 31, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 4],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 32, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 4],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 33, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 5],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 34, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 5],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 35, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 6],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 36, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 6],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 37, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 7],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 38, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 7],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 39, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 8],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 40, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 8],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 41, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 9],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 42, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 9],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 43, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 10],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 44, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 10],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 45, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 11],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 46, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 11],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 47, 'home_away' => 'home', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 12],
            ['score' => rand(10,20), 'game_id' => 1, 'player_id' => 48, 'home_away' => 'away', 'venue_played' => 'Esclusham Bowling Club', 'round_played' => 12],
        ]);
    }
}
