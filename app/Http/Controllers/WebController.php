<?php

namespace App\Http\Controllers;

use App\Counter;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class WebController extends Controller
{
    public function index() {
      $counters = Counter::all();

      return view('public.index', compact('counters'));
    }
}
