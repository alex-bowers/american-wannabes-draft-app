<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Player as PlayerResource;
use App\Http\Resources\User as UserResource;
use App\Models\Player;
use App\Models\User;

class RostersController extends Controller
{
    public function getRosters($user = null) {
        if ($user){
            return UserResource::collection(User::where('id', '=', $user)->get());
        }

        return UserResource::collection(User::get());
    }

    public function getAvailablePlayers() {
        $rookies = Player::isRookie()->whereNull('owned_by')->get();

        $rookieCollection = PlayerResource::collection($rookies)->mapToGroups(function ($player, $key) {
            return [$player->position => $player];
        });

        $veterans = Player::isVeteran()->whereNull('owned_by')->get();

        $veteransCollection = PlayerResource::collection($veterans)->mapToGroups(function ($player, $key) {
            return [$player->position => $player];
        });

        return [
            'rookies'  => $rookieCollection,
            'veterans' => $veteransCollection
        ];
    }
}
