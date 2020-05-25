<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pick extends JsonResource
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
            'id'       => $this->id,
            'round'    => $this->round,
            'number'   => $this->number,
            'year'     => $this->year,
            'owned_by' => $this->owned_by,
            'player'   => $this->player,
            'user'     => $this->ownedBy
        ];
    }
}
