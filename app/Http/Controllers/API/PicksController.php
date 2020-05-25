<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Pick as PickResource;
use App\Models\Pick;

class PicksController extends Controller
{
    public function getDraftBoard() {
        $picks = Pick::where('year', '=', 2020)->with('player')->get();

        return PickResource::collection($picks)->mapToGroups(function($item, $key) {
            return [$item['round'] => $item];
        });
    }
}
