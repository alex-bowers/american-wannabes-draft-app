<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PickResource;
use App\Models\Pick;
use App\Models\Player;
use Illuminate\Support\Facades\Auth;

class PicksController extends Controller
{
    public function getDraftBoard() {
        $picks = Pick::where('year', '=', 2020)->with('player')->get();

        return PickResource::collection($picks)->mapToGroups(function($item, $key) {
            return [$item['round'] => $item];
        });
    }

    public function selectPlayerFromDraft(Pick $pick, Player $player) {
        $player->owned_by = Auth::user()->id;
        $player->save();

        $pick->player_id = $player->id;
        $pick->save();

        return [
            'success' => true,
            'player'  => $player,
            'pick'    => $pick
        ];
    }
}
