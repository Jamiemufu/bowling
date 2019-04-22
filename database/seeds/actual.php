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
        DB::table('venues')->insert([
            ['name' => 'Moor Lane Bowling Club'],['name' => 'Esclusham Bowling Club'],
            ['name' => 'Red Lion Inn'],['name' => 'Spen Victoria']
        ]);

        //game data first
        DB::table('games')->insert([
            [
            'division' => 'Senior County Championship 2014',
            'date' => "1st June 2014",
            'home_team' => 'Warick & Worcester',
            'away_team' => 'Wales',
            'home_venue' => 1,
            'away_venue' => 2,
            'home_score' => 461,
            'away_score' => 434,
            ],
            [
            'division' => 'Senior County Championship 2014',
            'date' => "1st June 2014",
            'home_team' => 'Lancashire',
            'away_team' => 'Yorkshire',
            'home_venue' => 3,
            'away_venue' => 4,
            'home_score' => 358,
            'away_score' => 466,
            ]
        ]);
        
    
        //add players

        //first venue first games
        DB::table('players')->insert([
            ['first_name' => 'Ross','last_name' => 'Dunkley', 'club' => 'King George V'],
            ['first_name' => 'Darren','last_name' => 'Williams', 'club' => 'Conwy'],
            ['first_name' => 'Neil' ,'last_name' => 'Clarke', 'club' => 'Tamworth in Arden'],
            ['first_name' => 'Darren' ,'last_name' => 'Lacey', 'club' => 'Esclusham'],
            ['first_name' => 'Ryan' ,'last_name' => 'Prosser', 'club' => 'King George V'],
            ['first_name' => 'Trevor' ,'last_name' => 'Heath', 'club' => 'Abergele'],
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
            ['score' => 21, 'game_id' => 1, 'player_id' => 1, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 1],
            ['score' => 9, 'game_id' => 1, 'player_id' => 2, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 1],
            ['score' => 21, 'game_id' => 1, 'player_id' => 3, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 2],
            ['score' => 19, 'game_id' => 1, 'player_id' => 4, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 2],
            ['score' => 21, 'game_id' => 1, 'player_id' => 5, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 3],
            ['score' => 15, 'game_id' => 1, 'player_id' => 6, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 3],
            ['score' => 16, 'game_id' => 1, 'player_id' => 7, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 4],
            ['score' => 21, 'game_id' => 1, 'player_id' => 8, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 4],
            ['score' => 20, 'game_id' => 1, 'player_id' => 9, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 5],
            ['score' => 21, 'game_id' => 1, 'player_id' => 10, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 5],
            ['score' => 21, 'game_id' => 1, 'player_id' => 11, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 6],
            ['score' => 19, 'game_id' => 1, 'player_id' => 12, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 6],
            ['score' => 21, 'game_id' => 1, 'player_id' => 13, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 7],
            ['score' => 13, 'game_id' => 1, 'player_id' => 14, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 7],
            ['score' => 21, 'game_id' => 1, 'player_id' => 15, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 8],
            ['score' => 20, 'game_id' => 1, 'player_id' => 16, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 8],
            ['score' => 21, 'game_id' => 1, 'player_id' => 17, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 9],
            ['score' => 19, 'game_id' => 1, 'player_id' => 18, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 9],
            ['score' => 15, 'game_id' => 1, 'player_id' => 19, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 10],
            ['score' => 21, 'game_id' => 1, 'player_id' => 20, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 10],
            ['score' => 15, 'game_id' => 1, 'player_id' => 21, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 11],
            ['score' => 21, 'game_id' => 1, 'player_id' => 22, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 11],
            ['score' => 21, 'game_id' => 1, 'player_id' => 23, 'home_away' => 'home', 'venue_played' => 1, 'round_played' => 12],
            ['score' => 8, 'game_id' => 1, 'player_id' => 24, 'home_away' => 'away', 'venue_played' => 1, 'round_played' => 12],
        ]);

        //SECOND venue first games
        DB::table('players')->insert([
            ['first_name' => 'Pete','last_name' => 'Davenport', 'club' => 'George'],
            ['first_name' => 'Nicky','last_name' => 'Hughes', 'club' => 'Conwy'],
            ['first_name' => 'Ben' ,'last_name' => 'Harris', 'club' => 'Great Barr'],
            ['first_name' => 'Gerwyn' ,'last_name' => 'Davies', 'club' => 'Gresford Collery'],
            ['first_name' => 'Paul' ,'last_name' => 'Gamsbyr', 'club' => 'Kings Heath Park'],
            ['first_name' => 'Jason' ,'last_name' => 'Jones', 'club' => 'Abergele'],
            ['first_name' => 'Carl' ,'last_name' => 'Fielding', 'club' => 'Greville Arms'],
            ['first_name' => 'John' ,'last_name' => 'Bonatti', 'club' => 'Cord Talon'],
            ['first_name' => 'Anthoney' ,'last_name' => 'Bracken', 'club' => 'Greville Arms'],
            ['first_name' => 'Simon' ,'last_name' => 'Tyler', 'club' => 'Gresford Collery'],
            ['first_name' => 'Tom' ,'last_name' => 'Palmer', 'club' => 'Kings Heath Park'],
            ['first_name' => 'Nic' ,'last_name' => 'Jones', 'club' => 'Cunliffe'],
            ['first_name' => 'Justin' ,'last_name' => 'Hemmings', 'club' => 'Kings Heath Park'],
            ['first_name' => 'Andy' ,'last_name' => 'Delooze', 'club' => 'Gresford Collery'],
            ['first_name' => 'Lee' ,'last_name' => 'Kington', 'club' => 'Kings Heath Park'],
            ['first_name' => 'Fran' ,'last_name' => 'Penlington', 'club' => 'Broughton'],
            ['first_name' => 'Darren' ,'last_name' => 'Round', 'club' => 'Greville Arms'],
            ['first_name' => 'Geraint' ,'last_name' => 'Williams', 'club' => 'Gresford Collery'],
            ['first_name' => 'Paul' ,'last_name' => 'Hemming', 'club' => 'George'],
            ['first_name' => 'Kev' ,'last_name' => 'Nicolas', 'club' => 'Gresford Collery'],
            ['first_name' => 'Colin' ,'last_name' => 'Weaver', 'club' => 'Kings Heath Park'],
            ['first_name' => 'Andy' ,'last_name' => 'Hughes', 'club' => 'Gresford Collery'],
            ['first_name' => 'Steve' ,'last_name' => 'Darling', 'club' => 'George'],
            ['first_name' => 'Mike' ,'last_name' => 'Riley', 'club' => 'Broughton'],
            ]);

        //add player data for games
        DB::table('player_games')->insert([
            ['score' => 21, 'game_id' => 1, 'player_id' => 25, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 1],
            ['score' => 20, 'game_id' => 1, 'player_id' => 26, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 1],
            ['score' => 20, 'game_id' => 1, 'player_id' => 28, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 2],
            ['score' => 21, 'game_id' => 1, 'player_id' => 27, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 2],
            ['score' => 21, 'game_id' => 1, 'player_id' => 29, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 3],
            ['score' => 19, 'game_id' => 1, 'player_id' => 30, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 3],
            ['score' => 21, 'game_id' => 1, 'player_id' => 31, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 4],
            ['score' => 11, 'game_id' => 1, 'player_id' => 32, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 4],
            ['score' => 16, 'game_id' => 1, 'player_id' => 33, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 5],
            ['score' => 21, 'game_id' => 1, 'player_id' => 34, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 5],
            ['score' => 21, 'game_id' => 1, 'player_id' => 35, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 6],
            ['score' => 16, 'game_id' => 1, 'player_id' => 36, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 6],
            ['score' => 8, 'game_id' => 1, 'player_id' => 37, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 7],
            ['score' => 21, 'game_id' => 1, 'player_id' => 38, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 7],
            ['score' => 19, 'game_id' => 1, 'player_id' => 39, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 8],
            ['score' => 21, 'game_id' => 1, 'player_id' => 40, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 8],
            ['score' => 17, 'game_id' => 1, 'player_id' => 41, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 9],
            ['score' => 21, 'game_id' => 1, 'player_id' => 42, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 9],
            ['score' => 19, 'game_id' => 1, 'player_id' => 43, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 10],
            ['score' => 20, 'game_id' => 1, 'player_id' => 44, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 10],
            ['score' => 21, 'game_id' => 1, 'player_id' => 45, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 11],
            ['score' => 18, 'game_id' => 1, 'player_id' => 46, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 11],
            ['score' => 21, 'game_id' => 1, 'player_id' => 47, 'home_away' => 'home', 'venue_played' => 2, 'round_played' => 12],
            ['score' => 21, 'game_id' => 1, 'player_id' => 48, 'home_away' => 'away', 'venue_played' => 2, 'round_played' => 12],
        ]);

        //first venue SECOND games
        DB::table('players')->insert([
            ['first_name' => 'Chris','last_name' => 'Ashton (C)', 'club' => 'Grange'],
            ['first_name' => 'Scott','last_name' => 'Fisher', 'club' => 'Pudsey'],
            ['first_name' => 'Mark' ,'last_name' => 'Britton', 'club' => 'Wigan Subs'],
            ['first_name' => 'Thomas' ,'last_name' => 'Hanson', 'club' => 'Pudsey'],
            ['first_name' => 'Alan' ,'last_name' => 'Manual', 'club' => 'King & Queen'],
            ['first_name' => 'Dave' ,'last_name' => 'Fisher', 'club' => 'Morton House'],
            ['first_name' => 'Neil' ,'last_name' => 'Dolan', 'club' => 'St Oswald'],
            ['first_name' => 'Kieren' ,'last_name' => 'Smith', 'club' => 'Crossgates'],
            ['first_name' => 'Martin' ,'last_name' => 'Maxfield', 'club' => 'King & Queen'],
            ['first_name' => 'James' ,'last_name' => 'Hanson', 'club' => 'Pudsey'],
            ['first_name' => 'Steven' ,'last_name' => 'Lea', 'club' => 'King & Queen'],
            ['first_name' => 'Ian' ,'last_name' => 'Booth', 'club' => 'Lower Hopton WMC'],
            ['first_name' => 'Dave' ,'last_name' => 'Bennett', 'club' => 'Grange'],
            ['first_name' => 'Mark' ,'last_name' => 'Hughes', 'club' => 'Crossgates'],
            ['first_name' => 'Mike' ,'last_name' => 'Mannion Jnr', 'club' => 'St Oswald'],
            ['first_name' => 'Phil' ,'last_name' => 'Dowgill', 'club' => 'Crosshills & District'],
            ['first_name' => 'Steven' ,'last_name' => 'Jackson', 'club' => 'King & Queen'],
            ['first_name' => 'Richard' ,'last_name' => 'Stockdale', 'club' => 'Eccleshill'],
            ['first_name' => 'Geoff' ,'last_name' => 'Hilton', 'club' => 'Wigan Subs'],
            ['first_name' => 'Nicky' ,'last_name' => 'White', 'club' => 'Thongsbridge'],
            ['first_name' => 'Robert' ,'last_name' => 'Lawrenson', 'club' => 'St Albans'],
            ['first_name' => 'Liam' ,'last_name' => 'Griffin', 'club' => 'Pudsey'],
            ['first_name' => 'Damion' ,'last_name' => 'Lawrenson', 'club' => 'King & Queen'],
            ['first_name' => 'James' ,'last_name' => 'Davison (C)', 'club' => 'Thongsbridge'],
            ]);

        //add player data for games
        DB::table('player_games')->insert([
            ['score' => 21, 'game_id' => 2, 'player_id' => 49, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 1],
            ['score' => 15, 'game_id' => 2, 'player_id' => 50, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 1],
            ['score' => 16, 'game_id' => 2, 'player_id' => 51, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 2],
            ['score' => 21, 'game_id' => 2, 'player_id' => 52, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 2],
            ['score' => 13, 'game_id' => 2, 'player_id' => 53, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 3],
            ['score' => 21, 'game_id' => 2, 'player_id' => 54, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 3],
            ['score' => 16, 'game_id' => 2, 'player_id' => 55, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 4],
            ['score' => 21, 'game_id' => 2, 'player_id' => 56, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 4],
            ['score' => 9, 'game_id' => 2, 'player_id' => 57, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 5],
            ['score' => 21, 'game_id' => 2, 'player_id' => 58, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 5],
            ['score' => 7, 'game_id' => 2, 'player_id' => 59, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 6],
            ['score' => 21, 'game_id' => 2, 'player_id' => 60, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 6],
            ['score' => 12, 'game_id' => 2, 'player_id' => 61, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 7],
            ['score' => 21, 'game_id' => 2, 'player_id' => 62, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 7],
            ['score' => 6, 'game_id' => 2, 'player_id' => 63, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 8],
            ['score' => 21, 'game_id' => 2, 'player_id' => 64, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 8],
            ['score' => 21, 'game_id' => 2, 'player_id' => 65, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 9],
            ['score' => 20, 'game_id' => 2, 'player_id' => 66, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 9],
            ['score' => 6, 'game_id' => 2, 'player_id' => 67, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 10],
            ['score' => 21, 'game_id' => 2, 'player_id' => 68, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 10],
            ['score' => 21, 'game_id' => 2, 'player_id' => 69, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 11],
            ['score' => 20, 'game_id' => 2, 'player_id' => 70, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 11],
            ['score' => 21, 'game_id' => 2, 'player_id' => 71, 'home_away' => 'home', 'venue_played' => 3, 'round_played' => 12],
            ['score' => 19, 'game_id' => 2, 'player_id' => 72, 'home_away' => 'away', 'venue_played' => 3, 'round_played' => 12],
        ]);

        //first venue SECOND games
        DB::table('players')->insert([
            ['first_name' => 'Billy','last_name' => 'Speed', 'club' => 'Alexandra Park'],
            ['first_name' => 'Graeme','last_name' => 'Wilson (C)', 'club' => 'Lower Hopton WMC'],
            ['first_name' => 'John' ,'last_name' => 'Brown', 'club' => 'King & Queen'],
            ['first_name' => 'Robert' ,'last_name' => 'Hitchen', 'club' => 'Lower Hopton WMC'],
            ['first_name' => 'Chris' ,'last_name' => 'Cooke', 'club' => 'Alexandra Park'],
            ['first_name' => 'Peter' ,'last_name' => 'Jagger', 'club' => 'Hanging Heaton'],
            ['first_name' => 'Peter' ,'last_name' => 'Consterdine', 'club' => 'Westthoughton S&SC'],
            ['first_name' => 'Craig' ,'last_name' => 'Gant', 'club' => 'Netherton Con'],
            ['first_name' => 'Neil' ,'last_name' => 'Bithell (C)', 'club' => 'NCB'],
            ['first_name' => 'John' ,'last_name' => 'Spinks', 'club' => 'Pudsey'],
            ['first_name' => 'Peter' ,'last_name' => 'Marrow', 'club' => 'Ravine'],
            ['first_name' => 'Wayne' ,'last_name' => 'Moseley', 'club' => 'Lockwood Con'],
            ['first_name' => 'Chris' ,'last_name' => 'Hook', 'club' => 'Ravine'],
            ['first_name' => 'Dave' ,'last_name' => 'Fox', 'club' => 'Kirkheaton Con'],
            ['first_name' => 'Danny' ,'last_name' => 'Miller', 'club' => 'Ravine'],
            ['first_name' => 'Martin' ,'last_name' => 'Griffiths', 'club' => 'Netherton Con'],
            ['first_name' => 'Paul' ,'last_name' => 'Winrow', 'club' => 'Alexandra Park'],
            ['first_name' => 'Chris' ,'last_name' => 'Mordue', 'club' => 'Pudsey'],
            ['first_name' => 'Barry' ,'last_name' => 'Simm', 'club' => 'Holts Arms'],
            ['first_name' => 'Ashley' ,'last_name' => 'Tattersley', 'club' => 'Lower Hopton WMC'],
            ['first_name' => 'David' ,'last_name' => 'Higginbottom', 'club' => 'Westhoughton S&SC'],
            ['first_name' => 'Jack' ,'last_name' => 'Dyson', 'club' => 'Netherton Con'],
            ['first_name' => 'George' ,'last_name' => 'Chadwick', 'club' => 'Westhoughton S&SC'],
            ['first_name' => 'Ashley' ,'last_name' => 'Daykin', 'club' => 'Netherton Con'],
            ]);

        //add player data for games
        DB::table('player_games')->insert([
            ['score' => 21, 'game_id' => 2, 'player_id' => 73, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 1],
            ['score' => 18, 'game_id' => 2, 'player_id' => 74, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 1],
            ['score' => 14, 'game_id' => 2, 'player_id' => 75, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 2],
            ['score' => 21, 'game_id' => 2, 'player_id' => 76, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 2],
            ['score' => 21, 'game_id' => 2, 'player_id' => 77, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 3],
            ['score' => 9, 'game_id' => 2, 'player_id' => 78, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 3],
            ['score' => 13, 'game_id' => 2, 'player_id' => 79, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 4],
            ['score' => 21, 'game_id' => 2, 'player_id' => 80, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 4],
            ['score' => 21, 'game_id' => 2, 'player_id' => 81, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 5],
            ['score' => 11, 'game_id' => 2, 'player_id' => 82, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 5],
            ['score' => 20, 'game_id' => 2, 'player_id' => 83, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 6],
            ['score' => 21, 'game_id' => 2, 'player_id' => 84, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 6],
            ['score' => 19, 'game_id' => 2, 'player_id' => 85, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 7],
            ['score' => 21, 'game_id' => 2, 'player_id' => 86, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 7],
            ['score' => 11, 'game_id' => 2, 'player_id' => 87, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 8],
            ['score' => 21, 'game_id' => 2, 'player_id' => 88, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 8],
            ['score' => 9, 'game_id' => 2, 'player_id' => 89, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 9],
            ['score' => 21, 'game_id' => 2, 'player_id' => 90, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 9],
            ['score' => 21, 'game_id' => 2, 'player_id' => 91, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 10],
            ['score' => 18, 'game_id' => 2, 'player_id' => 92, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 10],
            ['score' => 9, 'game_id' => 2, 'player_id' => 93, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 11],
            ['score' => 21, 'game_id' => 2, 'player_id' => 94, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 11],
            ['score' => 10, 'game_id' => 2, 'player_id' => 95, 'home_away' => 'home', 'venue_played' => 4, 'round_played' => 12],
            ['score' => 21, 'game_id' => 2, 'player_id' => 96, 'home_away' => 'away', 'venue_played' => 4, 'round_played' => 12],
        ]);
    }
}
