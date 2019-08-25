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
     * Routes relationship.
     */
    public function routes() {
      return $this->belongsToMany(Route::class);
    }

    /**
     * Path to climber.
     */
    public function path() {
      return "climbers/$this->id";
    }

    /**
     * Path to climber.
     */
    public function nines() {
      return $this->routes()->where('type', 'boulder')->count();
    }

    /**
     * Path to climber.
     */
    public function eights() {
      return $this->routes()->where('type', 'sport')->count();
    }
}
