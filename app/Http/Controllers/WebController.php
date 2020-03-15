<?php

namespace App\Http\Controllers;

use App\Climber;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class WebController extends Controller
{
    public function index() {
      return view('public.index');
    }

    public function trad() {
      return view('public.trad');
    }

    public function sport9a() {
      return view('public.sport9a');
    }

    public function sport9b() {
      $climbers = Climber::with('routes')->whereHas('routes', function (Builder $query) {
          $query->where('grade', '=', '9b');
      })->get();

      return view('public.sport9b', compact('climbers'));
    }

    public function boulder() {
      return view('public.boulder');
    }
}
