<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NominationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'     => $this->id,
            'movie'  => MovieResource::make($this->movie),
            'person' => PersonResource::make($this->person),
            'extra'  => $this->extra
        ];
    }
}
