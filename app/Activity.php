<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  protected $table = 'climber_route';

  public function climber() {
    return $this->belongsTo(Climber::class);
  }

  public function route() {
    return $this->belongsTo(Route::class);
  }
}
