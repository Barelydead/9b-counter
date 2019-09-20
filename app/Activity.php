<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  /**
   * The table this model uses.
   *
   * @var string
   */
  protected $table = 'climber_route';

  /**
   * Climber relationship.
   */
  public function climber() {
    return $this->belongsTo(Climber::class);
  }

  /**
   * Routes relationship.
   */
  public function route() {
    return $this->belongsTo(Route::class);
  }
}
