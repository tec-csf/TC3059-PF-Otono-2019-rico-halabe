<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
  protected $fillable = [
    'uid', 'tank_id', 'water_id', 'floor_id', 'plant_id', 'stone_id', 'ornament_id', 'fish_id', 'package', 'client_id', 'price_id'
  ];
}
