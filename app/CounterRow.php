<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CounterRow extends Model
{
    /** @var $guarded attributes */
    protected $guarded = [];

    /**
     * The mentioned climber.
     */
    public function climber() {
        return $this->belongsTo(Climber::class)->withDefault();
    }

    /**
     * The route that was ascended.
     */
    public function route() {
        return $this->belongsTo(Route::class)->withDefault();
    }

    /**
     * The counter this row belongs to.
     */
    public function counter() {
        return $this->belongsTo(Counter::class)->withDefault();
    }
}
