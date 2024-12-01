<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return ['id' => $this->id,
            'region' => ['id' => $this->region_id,],
            'town' => ['id' => $this->town_id,],
            'street' => ['id' => $this->street_id,],
            'buildingType' => ['id' => $this->building_type_id,],
            'houseNumber' => $this->house_number,
            'building' => $this->building,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'status' => $this->status,];
    }

    public function withResponse($request, $response)
    {
        $response->setData($this->toArray($request));
    }
}
