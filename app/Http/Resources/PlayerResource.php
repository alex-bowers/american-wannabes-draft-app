<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
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
            'id'             => $this->id,
            'name'           => $this->name,
            'position'       => $this->position,
            'team'           => $this->proTeam,
            'college'        => $this->collegeTeam,
            'owned_by'       => $this->ownedBy,
            'rookie'         => $this->rookie,
            'free_agent'     => $this->free_agent,
            'recently_added' => $this->recently_added
        ];
    }
}
