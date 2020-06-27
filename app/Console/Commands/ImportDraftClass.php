<?php

namespace App\Console\Commands;

use App\Models\CollegeTeam;
use App\Models\NFLTeam;
use App\Models\Player;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ImportDraftClass extends Command
{
    /**
     * The positions that are selectable in the draft.
     *
     * @var int
     */
    const SELECTABLE_POSITIONS = [
        'QB',
        'RB',
        'WR',
        'TE',
        'K'
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:draft-class';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parses and imports the draft-class.csv';

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
        $fileName = 'draft-class.csv';
        if (Storage::exists($fileName)) {
            $draftClassString = Storage::get($fileName);

            // I need to convert the csv into a loopable format first.
            $draftClassArray = $this->convertCSVStringToArray($draftClassString);

            foreach ($draftClassArray as $player) {
                // Check for empty line in CSV and if the player can be selected.
                if(
                    $player[0]
                    && in_array($player[2], self::SELECTABLE_POSITIONS)
                ) {
                    $this->insertPlayer($player);
                }
            }

            $this->info('Draft class has been imported');
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
     * Insert players into DB.
     */
    private function insertPlayer($player)
    {
        $nflTeamName = explode(" ", $player[0]);
        $nflTeamNickname = array_pop($nflTeamName);
        $collegeTeam = CollegeTeam::where('team', $player[3])->first();
        $nflTeam = NFLTeam::where('nickname', $nflTeamNickname)->first();

        Player::insert([
            'name'       => $player[1],
            'position'   => $player[2],
            'team'       => $nflTeam ? $nflTeam->id : null,
            'college'    => $collegeTeam ? $collegeTeam->id : null,
            'rookie'     => true,
            'free_agent' => true
        ]);
    }
}
