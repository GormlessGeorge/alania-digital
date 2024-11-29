<?php

namespace App\Services;
use App\Models\Post;

class PostService
{
    public function store(array $data)
    {
        $coordinates = $data['coordinates'];
        $longitude = $coordinates[0];
        $latitude = $coordinates[1];


        return Post::create(['region_id' => $data['region'],
            'town_id' => $data['town'],
            'street_id' => $data['street'],
            'building_type_id' => $data['buildingType'],
            'house_number' => $data['house'],
            'building' => 12,
            'longitude' => $longitude,
            'latitude' => $latitude,
            'status' => 'На модерации',
        ]);
    }
}
