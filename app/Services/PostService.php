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
            'house_number' => $data['houseNumber'],
            'building' => $data['building'],
            'longitude' => $longitude,
            'latitude' => $latitude,
            'status' => 'На модерации',
        ]);
    }

    public function update(Post $post, array $data)
    {
        $coordinates = $data['coordinates'];
        $longitude = $coordinates[0];
        $latitude = $coordinates[1];
        $status = $post->status;
        $post->update(['region_id' => $data['region'],
            'town_id' => $data['town'],
            'street_id' => $data['street'],
            'building_type_id' => $data['buildingType'],
            'house_number' => $data['houseNumber'],
            'building' => $data['building'],
            'longitude' => $longitude,
            'latitude' => $latitude,
            'status' => $status]);
    }
}
