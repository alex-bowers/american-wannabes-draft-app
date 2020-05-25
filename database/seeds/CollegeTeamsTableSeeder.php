<?php

use App\Models\CollegeTeam;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CollegeTeamsTableSeeder extends Seeder
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
                "team" => "Cincinnati",
                "nickname" => "Bearcats",
                "abbreviation" => "CIN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/cincinnati.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Connecticut",
                "nickname" => "Huskies",
                "abbreviation" => "CONN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/connecticut.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "East Carolina",
                "nickname" => "Pirates",
                "abbreviation" => "ECU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/eastCarolina.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Houston",
                "nickname" => "Cougars",
                "abbreviation" => "HOU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/houston.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Memphis",
                "nickname" => "Tigers",
                "abbreviation" => "MEM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/memphis.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Navy",
                "nickname" => "Midshipmen",
                "abbreviation" => "NAVY",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/navy.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "SMU",
                "nickname" => "Mustangs",
                "abbreviation" => "SMU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/smu.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "South Florida",
                "nickname" => "Bulls",
                "abbreviation" => "USF",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southFlorida.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Temple",
                "nickname" => "Owls",
                "abbreviation" => "TEM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/temple.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Tulane",
                "nickname" => "Green Wave",
                "abbreviation" => "TULN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/tulane.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Tulsa",
                "nickname" => "Golden Hurricane",
                "abbreviation" => "TLSA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/tulsa.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "UCF",
                "nickname" => "Knights",
                "abbreviation" => "UCF",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/ucf.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Boston College",
                "nickname" => "Eagles",
                "abbreviation" => "BC",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/boston.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Clemson",
                "nickname" => "Tigers",
                "abbreviation" => "CLEM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/clemson.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Duke",
                "nickname" => "Blue Devils",
                "abbreviation" => "DUKE",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/duke.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Florida State",
                "nickname" => "Seminoles",
                "abbreviation" => "FSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/floridaState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Georgia Tech",
                "nickname" => "Yellow Jackets",
                "abbreviation" => "GT",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/georgiaTech.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Louisville",
                "nickname" => "Cardinals",
                "abbreviation" => "LOU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/louisville.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Miami",
                "nickname" => "Hurricanes",
                "abbreviation" => "MIAMI",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/miami.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "NC State",
                "nickname" => "Wolfpack",
                "abbreviation" => "NCST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/ncState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "North Carolina",
                "nickname" => "Tar Heels",
                "abbreviation" => "NC",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northCarolina.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Pittsburgh",
                "nickname" => "Panthers",
                "abbreviation" => "PITT",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/pittsburgh.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Syracuse",
                "nickname" => "Orange",
                "abbreviation" => "SYR",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/syracuse.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Virginia",
                "nickname" => "Cavaliers",
                "abbreviation" => "UVA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/virginia.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Virginia Tech",
                "nickname" => "Hokies",
                "abbreviation" => "VT",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/virginiaTech.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Wake Forest",
                "nickname" => "Demon Deacons",
                "abbreviation" => "WAKE",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/wakeForest.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Baylor",
                "nickname" => "Bears",
                "abbreviation" => "BAY",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/baylor.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Iowa State",
                "nickname" => "Cyclones",
                "abbreviation" => "ISU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/iowaState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Kansas",
                "nickname" => "Jayhawks",
                "abbreviation" => "KU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/kansas.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Kansas State",
                "nickname" => "Wildcats",
                "abbreviation" => "KSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/kansasState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Oklahoma",
                "nickname" => "Sooners",
                "abbreviation" => "OKLA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/oklahoma.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Oklahoma State",
                "nickname" => "Cowboys",
                "abbreviation" => "OKST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/oklahomaState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "TCU",
                "nickname" => "Horned Frogs",
                "abbreviation" => "TCU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/tcu.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Texas",
                "nickname" => "Longhorns",
                "abbreviation" => "TEX",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/texas.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Texas Tech",
                "nickname" => "Red Raiders",
                "abbreviation" => "TTU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/texasTech.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "West Virginia",
                "nickname" => "Mountaineers",
                "abbreviation" => "WVU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/westVirginia.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Illinois",
                "nickname" => "Fighting Illini",
                "abbreviation" => "ILL",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/illinois.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Indiana",
                "nickname" => "Hoosiers",
                "abbreviation" => "IND",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/indiana.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Iowa",
                "nickname" => "Hawkeyes",
                "abbreviation" => "IOWA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/iowa.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Maryland",
                "nickname" => "terrapins",
                "abbreviation" => "MARY",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/maryland.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Michigan",
                "nickname" => "Wolverines",
                "abbreviation" => "MICH",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/michigan.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Michigan State",
                "nickname" => "Spartans",
                "abbreviation" => "MIST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/michiganState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Minnesota",
                "nickname" => "Golden Gophers",
                "abbreviation" => "MINN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/minnesota.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Nebraska",
                "nickname" => "cornhuskers",
                "abbreviation" => "NEB",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/nebraska.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Northwestern",
                "nickname" => "Wildcats",
                "abbreviation" => "NWEST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northwestern.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Ohio State",
                "nickname" => "Buckeyes",
                "abbreviation" => "OHST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/ohioState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Penn State",
                "nickname" => "Nittany Lions",
                "abbreviation" => "PSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/pennState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Purdue",
                "nickname" => "Boilermakers",
                "abbreviation" => "PURD",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/purdue.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Rutgers",
                "nickname" => "Scarlet Knights",
                "abbreviation" => "RUTG",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/rutgers.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Wisconsin",
                "nickname" => "Badgers",
                "abbreviation" => "WIS",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/wisconsin.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Charlotte",
                "nickname" => "49ers",
                "abbreviation" => "CHAR",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/charlotte.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Florida Atlantic",
                "nickname" => "Owls",
                "abbreviation" => "FAU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/floridaAtlantic.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Florida Intl",
                "nickname" => "Golden Panthers",
                "abbreviation" => "FIU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/floridaIntl.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Louisiana Tech",
                "nickname" => "Bulldogs",
                "abbreviation" => "LT",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/louisianaTech.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Marshall",
                "nickname" => "Thundering Herd",
                "abbreviation" => "MRSH",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/marshall.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Middle Tennessee",
                "nickname" => "Blue Raiders",
                "abbreviation" => "MTSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/middleTennessee.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "North Texas",
                "nickname" => "Mean Green",
                "abbreviation" => "UNT",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northTexas.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Old Dominion",
                "nickname" => "Monarchs",
                "abbreviation" => "ODU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/oldDominion.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Rice",
                "nickname" => "Owls",
                "abbreviation" => "Rice",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/rice.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Southern Mississippi",
                "nickname" => "Golden Eagles",
                "abbreviation" => "USM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southernMississippi.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Texas San Antonio",
                "nickname" => "Roadrunners",
                "abbreviation" => "UTSA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/texasSanAntonio.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "UAB",
                "nickname" => "Blazers",
                "abbreviation" => "UAB",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/uab.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "UTEP",
                "nickname" => "Miners",
                "abbreviation" => "UTEP",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/utep.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Western Kentucky",
                "nickname" => "Hilltoppers",
                "abbreviation" => "WKU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/westernKentucky.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Army",
                "nickname" => "Black Knights",
                "abbreviation" => "ARMY",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/army.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "BYU",
                "nickname" => "Cougars",
                "abbreviation" => "BYU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/byu.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Notre Dame",
                "nickname" => "Fighting Irish",
                "abbreviation" => "NDAME",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/notreDame.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Akron",
                "nickname" => "Zips",
                "abbreviation" => "AKRN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/akron.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Ball State",
                "nickname" => "Cardinals",
                "abbreviation" => "BALL",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/ballState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Bowling Green",
                "nickname" => "Falcons",
                "abbreviation" => "BGSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/bowlingGreen.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Buffalo",
                "nickname" => "Bulls",
                "abbreviation" => "BUF",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/buffalo.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Central Michigan",
                "nickname" => "Chippewas",
                "abbreviation" => "CMU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/centralMichigan.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Eastern Michigan",
                "nickname" => "Eagles",
                "abbreviation" => "EMU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/easternMichigan.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Kent State",
                "nickname" => "Golden Flashes",
                "abbreviation" => "KENT",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/kentState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Massachusetts",
                "nickname" => "Minutemen",
                "abbreviation" => "UMASS",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/massachusetts.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Miami (OH)",
                "nickname" => "Redhawks",
                "abbreviation" => "M-OH",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/miamiOH.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Northern Illinois",
                "nickname" => "huskies",
                "abbreviation" => "NIU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northernIllinois.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Ohio",
                "nickname" => "Bobcats",
                "abbreviation" => "OHIO",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/ohio.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Toledo",
                "nickname" => "Rockets",
                "abbreviation" => "TOL",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/toledo.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Western Michigan",
                "nickname" => "Broncos",
                "abbreviation" => "WMU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/westernMichigan.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Air Force",
                "nickname" => "Falcons",
                "abbreviation" => "AF",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/airForce.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Boise State",
                "nickname" => "Broncos",
                "abbreviation" => "BOISE",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/boiseState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Colorado State",
                "nickname" => "Rams",
                "abbreviation" => "CSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/coloradoState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Fresno State",
                "nickname" => "Bulldogs",
                "abbreviation" => "FRSNO",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/fresnoState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Hawaii",
                "nickname" => "Rainbow Warriors",
                "abbreviation" => "HAW",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/hawaii.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Nevada",
                "nickname" => "Wolf Pack",
                "abbreviation" => "NEV",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/nevada.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "New Mexico",
                "nickname" => "Lobos",
                "abbreviation" => "UNM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/newMexico.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "San Diego State",
                "nickname" => "Aztecs",
                "abbreviation" => "SDSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/sanDiegoState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "San José State",
                "nickname" => "Spartans",
                "abbreviation" => "SISU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/sanJoseState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "UNLV",
                "nickname" => "Rebels",
                "abbreviation" => "UNLV",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/unlv.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Utah State",
                "nickname" => "Aggies",
                "abbreviation" => "UTST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/utahState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Wyoming",
                "nickname" => "Cowboys",
                "abbreviation" => "WYO",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/wyoming.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Arizona",
                "nickname" => "Wildcats",
                "abbreviation" => "ARIZ",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/arizona.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Arizona State",
                "nickname" => "Sun Devils",
                "abbreviation" => "ARST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/arizonaState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "California",
                "nickname" => "Golden Bears",
                "abbreviation" => "CAL",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/california.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Colorado",
                "nickname" => "Buffaloes",
                "abbreviation" => "COL",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/colorado.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Oregon",
                "nickname" => "Ducks",
                "abbreviation" => "OREG",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/oregon.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Oregon State",
                "nickname" => "Beavers",
                "abbreviation" => "ORST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/oregonState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Stanford",
                "nickname" => "Cardinal",
                "abbreviation" => "STAN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/stanford.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "UCLA",
                "nickname" => "Bruins",
                "abbreviation" => "UCLA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/ucla.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "USC",
                "nickname" => "Trojans",
                "abbreviation" => "USC",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/usc.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Utah",
                "nickname" => "Utes",
                "abbreviation" => "UTAH",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/utah.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Washington",
                "nickname" => "Huskies",
                "abbreviation" => "WASH",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/washington.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Washington State",
                "nickname" => "Cougars",
                "abbreviation" => "WSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/washingtonState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Alabama",
                "nickname" => "Crimson Tide",
                "abbreviation" => "BAMA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/alabama.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Arkansas",
                "nickname" => "Razorbacks",
                "abbreviation" => "ARK",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/arkansas.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Auburn",
                "nickname" => "Tigers",
                "abbreviation" => "AUB",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/auburn.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Florida",
                "nickname" => "Gators",
                "abbreviation" => "UF",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/florida.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Georgia",
                "nickname" => "Bulldogs",
                "abbreviation" => "UGA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/georgia.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Kentucky",
                "nickname" => "Wildcats",
                "abbreviation" => "UK",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/kentucky.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "LSU",
                "nickname" => "Tigers",
                "abbreviation" => "LSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/lsu.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Mississippi State",
                "nickname" => "Bulldogs",
                "abbreviation" => "MSST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/mississippiState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Missouri",
                "nickname" => "Tigers",
                "abbreviation" => "MIZZ",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/missouri.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Ole Miss",
                "nickname" => "Rebels",
                "abbreviation" => "MISS",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/oleMiss.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "South Carolina",
                "nickname" => "Gamecocks",
                "abbreviation" => "SCAR",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southCarolina.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Tennessee",
                "nickname" => "Volunteers",
                "abbreviation" => "TENN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/tennessee.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Texas A&M",
                "nickname" => "Aggies",
                "abbreviation" => "TXAM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/texasAM.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Vanderbilt",
                "nickname" => "Commodores",
                "abbreviation" => "VAND",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/vanderbilt.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Appalachian State",
                "nickname" => "Mountaineers",
                "abbreviation" => "APP",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/appalachianState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Arkansas State",
                "nickname" => "Red Wolves",
                "abbreviation" => "ARST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/arkansasState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Georgia Southern",
                "nickname" => "Eagles",
                "abbreviation" => "GASO",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/georgiaSouthern.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Georgia State",
                "nickname" => "Panthers",
                "abbreviation" => "GAST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/georgiaState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Idaho",
                "nickname" => "Vandals",
                "abbreviation" => "IDHO",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/idaho.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Louisiana Lafayette",
                "nickname" => "Ragin Cajuns",
                "abbreviation" => "ULL",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/louisianaLafayette.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Louisiana Monroe",
                "nickname" => "Warhawks",
                "abbreviation" => "ULM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/louisianaMonroe.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "New Mexico State",
                "nickname" => "Aggies",
                "abbreviation" => "NMST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/newMexicoState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "South Alabama",
                "nickname" => "Jaguars",
                "abbreviation" => "SBAMA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southAlabama.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Texas State",
                "nickname" => "Bobcats",
                "abbreviation" => "TXST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/texasState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Troy",
                "nickname" => "Trojans",
                "abbreviation" => "TROY",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/troy.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Cal Poly",
                "nickname" => "Mustangs",
                "abbreviation" => "CP",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/calPoly.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Eastern Washington",
                "nickname" => "Eagles",
                "abbreviation" => "EWU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/easternWashington.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Idaho State",
                "nickname" => "Bengals",
                "abbreviation" => "IDST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/idahoState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Montana",
                "nickname" => "Grizzlies",
                "abbreviation" => "MONT",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/montana.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Montana State",
                "nickname" => "Bobcats",
                "abbreviation" => "MTST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/montanaState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "North Dakota",
                "nickname" => "Fighting Hawks",
                "abbreviation" => "UND",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northDakota.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Northern Arizona",
                "nickname" => "Lumberjacks",
                "abbreviation" => "NAU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northernArizona.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Northern Colorado",
                "nickname" => "Bears",
                "abbreviation" => "UNCO",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northernColorado.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Portland State",
                "nickname" => "Vikings",
                "abbreviation" => "PRST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/portlandState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Sacramento State",
                "nickname" => "Hornets",
                "abbreviation" => "SAC",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/sacramentoState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Southern Utah",
                "nickname" => "Thunderbirds",
                "abbreviation" => "SUU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southernUtah.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "UC Davis",
                "nickname" => "Aggies",
                "abbreviation" => "UCD",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/ucDavis.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Weber State",
                "nickname" => "Wildcats",
                "abbreviation" => "WEB",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/weberState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Charleston Southern",
                "nickname" => "Buccaneers",
                "abbreviation" => "CHSO",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/charlestonSouthern.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Coastal Carolina",
                "nickname" => "Chanticleers",
                "abbreviation" => "CCAR",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/coastalCarolina.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Gardner-Webb",
                "nickname" => "Bulldogs",
                "abbreviation" => "WEBB",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/gardnerWebb.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Kennesaw State",
                "nickname" => "Owls",
                "abbreviation" => "KENN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/kennesawState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Liberty",
                "nickname" => "Flames",
                "abbreviation" => "LIB",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/liberty.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Monmouth",
                "nickname" => "Hawks",
                "abbreviation" => "MONM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/monmouth.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Presbyterian College",
                "nickname" => "Blue Hose",
                "abbreviation" => "PRE",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/presbyterianCollege.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Albany",
                "nickname" => "Great Danes",
                "abbreviation" => "ALBY",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/albany.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Delaware",
                "nickname" => "Blue Hens",
                "abbreviation" => "DEL",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/delaware.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Elon",
                "nickname" => "Phoenix",
                "abbreviation" => "ELON",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/elon.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "James Madison",
                "nickname" => "Dukes",
                "abbreviation" => "JMU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/jamesMadison.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Maine",
                "nickname" => "Black Bears",
                "abbreviation" => "MAINE",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/maine.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "New Hampshire",
                "nickname" => "Wildcats",
                "abbreviation" => "UNH",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/newHampshire.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Rhode Island",
                "nickname" => "Rams",
                "abbreviation" => "URI",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/rhodeIsland.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Richmond",
                "nickname" => "Spiders",
                "abbreviation" => "RICH",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/richmond.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Stony Brook",
                "nickname" => "Seawolves",
                "abbreviation" => "STON",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/stonyBrook.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Towson",
                "nickname" => "Tigers",
                "abbreviation" => "TOWS",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/towson.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Villanova",
                "nickname" => "Wildcats",
                "abbreviation" => "NOVA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/villanova.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "William & Mary",
                "nickname" => "Tribe",
                "abbreviation" => "W&M",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/williamMary.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "East Tenn. St.",
                "nickname" => "Buccaneers",
                "abbreviation" => "ETSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/eastTennessee.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Brown",
                "nickname" => "Bears",
                "abbreviation" => "BRWN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/brown.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Columbia",
                "nickname" => "Lions",
                "abbreviation" => "CLMB",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/columbia.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Cornell",
                "nickname" => "Big Red",
                "abbreviation" => "COR",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/cornell.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Dartmouth",
                "nickname" => "Big Green",
                "abbreviation" => "DART",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/dartmouth.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Harvard",
                "nickname" => "Crimson",
                "abbreviation" => "HARV",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/harvard.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Penn",
                "nickname" => "Quakers",
                "abbreviation" => "PENN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/penn.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Princeton",
                "nickname" => "Tigers",
                "abbreviation" => "PRIN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/princeton.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Yale",
                "nickname" => "Bulldogs",
                "abbreviation" => "YALE",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/yale.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Bethune-Cookman",
                "nickname" => "Wildcats",
                "abbreviation" => "COOK",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/bethuneCookman.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Delaware State",
                "nickname" => "Hornets",
                "abbreviation" => "DSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/delawareState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Florida A&M",
                "nickname" => "Rattlers",
                "abbreviation" => "FAMU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/floridaAM.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Hampton",
                "nickname" => "Pirates",
                "abbreviation" => "HAMP",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/hampton.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Howard",
                "nickname" => "Bison",
                "abbreviation" => "HOW",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/howard.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Morgan State",
                "nickname" => "Bears",
                "abbreviation" => "MORG",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/morganState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Norfolk State",
                "nickname" => "Spartans",
                "abbreviation" => "NORF",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/norfolkState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "North Carolina A&T",
                "nickname" => "Aggies",
                "abbreviation" => "NCAT",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northCarolinaAT.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "North Carolina Central",
                "nickname" => "Eagles",
                "abbreviation" => "NCCU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northCarolinaCentral.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Savannah State",
                "nickname" => "Tigers",
                "abbreviation" => "SAV",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/savannahState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "South Carolina State",
                "nickname" => "Bulldogs",
                "abbreviation" => "SCST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southCarolinaState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Illinois State",
                "nickname" => "Redbirds",
                "abbreviation" => "ILST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/illinoisState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Indiana State",
                "nickname" => "Sycamores",
                "abbreviation" => "INST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/indianaState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Missouri State",
                "nickname" => "Bears",
                "abbreviation" => "MOST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/missouriState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "North Dakota State",
                "nickname" => "Bison",
                "abbreviation" => "NDSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northDakotaState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Northern Iowa",
                "nickname" => "Panthers",
                "abbreviation" => "UNI",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northernIowa.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "South Dakota",
                "nickname" => "Coyotes",
                "abbreviation" => "SDAK",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southDakota.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "South Dakota State",
                "nickname" => "Jackrabbits",
                "abbreviation" => "SDSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southDakotaState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Southern Illinois",
                "nickname" => "Salukis",
                "abbreviation" => "SIU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southernIllinois.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Western Illinois",
                "nickname" => "Leathernecks",
                "abbreviation" => "WIU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/westernIllinois.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Youngstown State",
                "nickname" => "Penguins",
                "abbreviation" => "YSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/youngstownState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Bryant",
                "nickname" => "Bulldogs",
                "abbreviation" => "BRY",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/bryant.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Central Connecticut",
                "nickname" => "Blue Devils",
                "abbreviation" => "CCSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/centralConnecticut.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Duquesne",
                "nickname" => "Dukes",
                "abbreviation" => "DUQ",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/duquesne.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Robert Morris",
                "nickname" => "Colonials",
                "abbreviation" => "RMU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/robertMorris.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Sacred Heart",
                "nickname" => "Pioneers",
                "abbreviation" => "SHU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/sacredHeart.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "St Francis (PA)",
                "nickname" => "Red Flash",
                "abbreviation" => "SFU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/stFrancisPA.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Wagner",
                "nickname" => "Seahawks",
                "abbreviation" => "WAG",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/wagner.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Austin Peay",
                "nickname" => "Governors",
                "abbreviation" => "PEAY",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/austinPeay.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Eastern Illinois",
                "nickname" => "Panthers",
                "abbreviation" => "EIU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/easternIllinois.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Eastern Kentucky",
                "nickname" => "Colonels",
                "abbreviation" => "EKY",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/easternKentucky.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Jacksonville State",
                "nickname" => "Gamecocks",
                "abbreviation" => "JVST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/jacksonvilleState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Murray State",
                "nickname" => "Racers",
                "abbreviation" => "MURR",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/murrayState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Southeast Missouri State",
                "nickname" => "Redhawks",
                "abbreviation" => "SEMO",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southeastMissouriState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Tennessee State",
                "nickname" => "Tigers",
                "abbreviation" => "TNST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/tennesseeState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Tennessee Tech",
                "nickname" => "Golden Eagles",
                "abbreviation" => "TNTC",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/tennesseeTech.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Tennessee-Martin",
                "nickname" => "Skyhawks",
                "abbreviation" => "UTM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/tennesseeMartin.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Bucknell",
                "nickname" => "Bison",
                "abbreviation" => "BUCK",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/bucknell.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Colgate",
                "nickname" => "Raiders",
                "abbreviation" => "COLG",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/colgate.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Fordham",
                "nickname" => "Rams",
                "abbreviation" => "FOR",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/fordham.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Georgetown",
                "nickname" => "Hoyas",
                "abbreviation" => "GTWN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/georgetown.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Holy Cross",
                "nickname" => "Crusaders",
                "abbreviation" => "HC",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/holyCross.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Lafayette",
                "nickname" => "Leopards",
                "abbreviation" => "LAF",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/lafayette.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Lehigh",
                "nickname" => "Mountain Hawks",
                "abbreviation" => "LEH",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/lehigh.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Butler",
                "nickname" => "Bulldogs",
                "abbreviation" => "BUT",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/butler.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Campbell",
                "nickname" => "Camels",
                "abbreviation" => "CAMP",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/campbell.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Davidson",
                "nickname" => "Wildcats",
                "abbreviation" => "DAV",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/davidson.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Dayton",
                "nickname" => "Flyers",
                "abbreviation" => "DAY",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/dayton.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Drake",
                "nickname" => "Bulldogs",
                "abbreviation" => "DRKE",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/drake.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Jacksonville",
                "nickname" => "Dolphins",
                "abbreviation" => "JAC",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/jacksonville.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Marist",
                "nickname" => "Red Foxes",
                "abbreviation" => "MRST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/marist.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Morehead State",
                "nickname" => "Eagles",
                "abbreviation" => "MORE",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/moreheadState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "San Diego",
                "nickname" => "Toreros",
                "abbreviation" => "USD",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/sanDiego.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Stetson",
                "nickname" => "Hatters",
                "abbreviation" => "STET",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/stetson.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Valparaiso",
                "nickname" => "Crusaders",
                "abbreviation" => "VALP",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/valparaiso.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Chattanooga",
                "nickname" => "Mocs",
                "abbreviation" => "Chat",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/chattanooga.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Furman",
                "nickname" => "Paladins",
                "abbreviation" => "Fur",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/furman.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Mercer",
                "nickname" => "Bears",
                "abbreviation" => "MER",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/mercer.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Samford",
                "nickname" => "Bulldogs",
                "abbreviation" => "SAM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/samford.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "The Citadel",
                "nickname" => "Bulldogs",
                "abbreviation" => "CIT",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/citadel.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "VMI",
                "nickname" => "Keydets",
                "abbreviation" => "VMI",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/vmi.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Western Carolina",
                "nickname" => "Catamounts",
                "abbreviation" => "WCU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/westernCarolina.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Wofford",
                "nickname" => "Terriers",
                "abbreviation" => "WOF",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/wofford.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Abilene Christian",
                "nickname" => "Wildcats",
                "abbreviation" => "ACU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/abileneChristian.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Central Arkansas",
                "nickname" => "Bears",
                "abbreviation" => "UCA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/centralArkansas.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Houston Baptist",
                "nickname" => "Huskies",
                "abbreviation" => "HBU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/houstonBaptist.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Incarnate Word",
                "nickname" => "Cardinals",
                "abbreviation" => "IW",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/incarnateWord.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Lamar",
                "nickname" => "Cardinals",
                "abbreviation" => "LAM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/lamar.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "McNeese State",
                "nickname" => "Cowboys",
                "abbreviation" => "MCNS",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/mcNeeseState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Nicholls State",
                "nickname" => "Colonels",
                "abbreviation" => "NICH",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/nichollsState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Northwestern State",
                "nickname" => "Demons",
                "abbreviation" => "NWST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/northwesternState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Sam Houston State",
                "nickname" => "Bearkats",
                "abbreviation" => "SHSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/samHoustonState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Southeastern Louisiana",
                "nickname" => "Lions",
                "abbreviation" => "SELA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southeasternLouisiana.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Stephen F Austin",
                "nickname" => "Lumberjacks",
                "abbreviation" => "SFA",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/stephenFAustin.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Alabama A&M",
                "nickname" => "Bulldogs",
                "abbreviation" => "AAMU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/alabamaAM.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Alabama State",
                "nickname" => "Hornets",
                "abbreviation" => "ALST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/alabamaState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Alcorn State",
                "nickname" => "Braves",
                "abbreviation" => "ALCN",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/alcornState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Arkansas-Pine Bluff",
                "nickname" => "Golde Lions",
                "abbreviation" => "ARPB",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/arkansasPineBluff.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Grambling State",
                "nickname" => "Tigers",
                "abbreviation" => "GRAM",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/gramblingState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Jackson State",
                "nickname" => "Tigers",
                "abbreviation" => "JKST",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/jacksonState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Mississippi Valley State",
                "nickname" => "Delta Devils",
                "abbreviation" => "MVSU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/mississippiValleyState.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Prairie View A&M",
                "nickname" => "Prairie View",
                "abbreviation" => "PV",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/prairieView.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Southern",
                "nickname" => "Jaguars",
                "abbreviation" => "SOU",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/southern.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "team" => "Texas Southern",
                "nickname" => "Tigers",
                "abbreviation" => "TXSO",
                "logo" => "https://raw.githubusercontent.com/abrelsfo/sportsJSON/master/collegeFootball/logos/texasSouthern.png",
                "sport" => "football",
                "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        foreach ($teams as $team) {
            CollegeTeam::insert($team);
        }
    }
}
