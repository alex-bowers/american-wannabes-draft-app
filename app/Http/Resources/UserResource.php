<?php

namespace App\Http\Resources;

use App\Http\Resources\PlayerResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'      => $this->id,
            'name'    => $this->name,
            'email'   => $this->email,
            'active'  => $this->active,
            'players' => $this->formatPlayersIntoPositions(PlayerResource::collection($this->players)),
        ];
    }

    /**
     * Sort players by position.
     *
     * @param  App\Http\Resources\PlayerResource  $players
     * @return Collection
     */
    private function formatPlayersIntoPositions($players)
    {
        return $players->mapToGroups(function ($player, $key) {
            return [$player->position => $player];
        });
    }
}
