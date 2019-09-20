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
      return $this->belongsToMany(Route::class)->withTimestamps()->withPivot('route_id', 'updated_at');
    }

    /**
     * Path to climber.
     */
    public function path() {
      return "climbers/$this->id";
    }

    /**
     * Count of sport climbs.
     */
    public function nines() {
      return count($this->routes->filter(function ($route) {
        return $route->type == 'sport';
      }));
    }

    /**
     * Count of boulder climbs.
     */
    public function eights() {
      return count($this->routes->filter(function ($route) {
        return $route->type == 'boulder';
      }));
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
