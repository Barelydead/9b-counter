<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    /** @var $guarded attributes */
    protected $guarded = [];

    /**
     * Climbers relationship.
     */
    public function climbers() {
      return $this->belongsToMany(Climber::class)->withTimestamps()->withPivot('climber_id', 'updated_at');
    }
}
