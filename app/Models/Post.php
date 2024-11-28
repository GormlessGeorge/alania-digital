<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['region_id', 'town_id', 'street_id',
        'building_type_id', 'house_number', 'building',
        'latitude', 'longitude', 'status'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function locality()
    {
        return $this->belongsTo(Town::class);
    }

    public function street()
    {
        return $this->belongsTo(Street::class);
    }

    public function buildingType()
    {
        return $this->belongsTo(BuildingType::class);
    }
}
