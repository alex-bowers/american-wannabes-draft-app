<?php

use App\Models\NFLTeam;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class NFLTeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                "team" => "Arizona",
                "nickname" => "Cardinals",
                "abbreviation" => "ARI",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/ARI.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Atlanta",
                "nickname" => "Falcons",
                "abbreviation" => "ATL",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/ATL.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Baltimore",
                "nickname" => "Ravens",
                "abbreviation" => "BAL",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/BAL.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Buffalo",
                "nickname" => "Bills",
                "abbreviation" => "BUF",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/BUF.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Carolina",
                "nickname" => "Panthers",
                "abbreviation" => "CAR",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/CAR.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Chicago",
                "nickname" => "Bears",
                "abbreviation" => "CHI",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/CHI.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Cincinnati",
                "nickname" => "Bengals",
                "abbreviation" => "CIN",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/CIN.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Cleveland",
                "nickname" => "Browns",
                "abbreviation" => "CLE",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/CLE.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Dallas",
                "nickname" => "Cowboys",
                "abbreviation" => "DAL",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/DAL.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Denver",
                "nickname" => "Broncos",
                "abbreviation" => "DEN",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/DEN.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Detroit",
                "nickname" => "Lions",
                "abbreviation" => "DET",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/DET.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Green Bay",
                "nickname" => "Packers",
                "abbreviation" => "GB",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/GB.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Houston",
                "nickname" => "Texans",
                "abbreviation" => "HOU",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/HOU.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Indianapolis",
                "nickname" => "Colts",
                "abbreviation" => "IND",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/IND.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Jacksonville",
                "nickname" => "Jaguars",
                "abbreviation" => "JAX",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/JAX.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Kansas City",
                "nickname" => "Chiefs",
                "abbreviation" => "KC",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/KC.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Los Angeles",
                "nickname" => "Chargers",
                "abbreviation" => "LAC",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/LAC.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Los Angeles",
                "nickname" => "Rams",
                "abbreviation" => "LA",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/LA.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Las Vagas",
                "nickname" => "Raiders",
                "abbreviation" => "LV",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/OAK.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Miami",
                "nickname" => "Dolphins",
                "abbreviation" => "MIA",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/MIA.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Minnesota",
                "nickname" => "Vikings",
                "abbreviation" => "MIN",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/MIN.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "New England",
                "nickname" => "Patriots",
                "abbreviation" => "NE",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/NE.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "New Orleans",
                "nickname" => "Saints",
                "abbreviation" => "NO",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/NO.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "New York",
                "nickname" => "Giants",
                "abbreviation" => "NYG",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/NYG.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "New Jersey",
                "nickname" => "Jets",
                "abbreviation" => "NYJ",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/NYJ.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Philadelphia",
                "nickname" => "Eagles",
                "abbreviation" => "PHI",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/PHI.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Pittsburgh",
                "nickname" => "Steelers",
                "abbreviation" => "PIT",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/PIT.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "San Francisco",
                "nickname" => "49ers",
                "abbreviation" => "SF",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/SF.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Seattle",
                "nickname" => "Seahawks",
                "abbreviation" => "SEA",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/SEA.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Tampa Bay",
                "nickname" => "Buccaneers",
                "abbreviation" => "TB",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/TB.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Tennessee",
                "nickname" => "Titans",
                "abbreviation" => "TEN",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/TEN.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Washington",
                "nickname" => "Redskins",
                "abbreviation" => "WAS",
                "logo" => "https://static.nfl.com/static/content/public/static/wildcat/assets/img/logos/teams/WAS.svg",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        foreach ($teams as $team) {
            NFLTeam::insert($team);
        }
    }
}
