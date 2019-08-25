<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    /** @var $guarded description */
    protected $guarded = [];

    public function climbers() {
      return $this->belongsToMany(Climber::class);
    }
}