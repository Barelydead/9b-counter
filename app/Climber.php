<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Climber extends Model
{
    /**
     * @var array $guarded
     */
    protected $guarded = [];

    /**
     * Routes relationship
     */
    public function routes() {
      return $this->belongsToMany(Route::class);
    }
}
