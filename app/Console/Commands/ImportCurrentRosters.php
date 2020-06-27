<?php

namespace App\Console\Commands;

use App\Models\NFLTeam;
use App\Models\Player;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ImportCurrentRosters extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:rosters';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports rosters from the keepers `rosters.csv` file.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $fileName = 'rosters.csv';
        if (Storage::exists($fileName)) {
            $currentPosition = "";
            $rostersString = Storage::get($fileName);
            $userTeams = [];

            // I need to convert the csv into a loopable format first.
            $rostersArray = $this->convertCSVStringToArray($rostersString);

            foreach ($rostersArray as $key => $row) {
                if ($key === 0) {
                    $userTeams = $this->setUserTeams($row);
                } else {
                    if (!is_numeric($row[0])) {
                        $currentPosition = $row[0];
                        // Skip the rest of the row as it will be empty.
                        continue;
                    }

                    $this->insertPlayers($currentPosition, $row, $userTeams);
                }
            }

            $this->info('Rosters have been imported');
        } else {
            $this->error('File not found.');
        }
    }

    /**
     * Convert the CSV string into an array.
     *
     * @return array
     */
    private function convertCSVStringToArray($string)
    {
        $array = [];
        $lines = explode(PHP_EOL, $string);

        foreach ($lines as $line) {
            $array[] = str_getcsv($line);
        }

        return $array;
    }

    /**
     * Find correct user ID value.
     *
     * @return array
     */
    private function findCorrectUserId($team, $users)
    {
        foreach ($users as $user) {
            if ($user['array_id'] === $team) {
                return $user['user_id'];
            }
        }
    }

    /**
     * Insert players into DB.
     */
    private function insertPlayers($position, $players, $users)
    {
        foreach ($players as $team => $player) {
            if (Is_numeric($player) || empty($player)) {
                continue;
            }

            $playerData = explode(' - ', $player);
            $nflTeam = NFLTeam::where('abbreviation', $playerData[1])->first();
            $userId = $this->findCorrectUserId($team, $users);

            Player::insert([
                'name'     => $playerData[0],
                'position' => $position,
                'team'     => $nflTeam ? $nflTeam->id : null,
                'owned_by' => $userId,
            ]);
        }
    }

    /**
     * Return the correct user IDs.
     *
     * @return array
     */
    private function setUserTeams($teams)
    {
        $teamsWithKeys = [];
        foreach ($teams as $key => $teamName) {
            $user = User::where('fantasy_team_name', $teamName)->first();
            if (!is_null($user)) {
                $teamsWithKeys[$teamName]['array_id'] = $key;
                $teamsWithKeys[$teamName]['user_id'] = $user->id;
            }
        }

        return $teamsWithKeys;
    }
}
