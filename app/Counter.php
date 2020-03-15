<?php

namespace App;

use App\CounterRow;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    /**
     * @var array $guarded
     */
    protected $guarded = [];


    /**
     * The counter rows
     */
    public function rows() {
      return $this->hasMany(CounterRow::class);
    }
}
