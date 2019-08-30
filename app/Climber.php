<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;

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

    /**
     * return path to flag
     */
    public function flag() {
      $file = new Filesystem;
      $country = str_replace(' ', '-', $this->country);
      $country = strtolower($country);

      if ($file->exists("images/flags/$country.svg")) {
        return asset("images/flags/$country.svg");
      }

      return asset("images/flags/sweden.svg");
    }
}
