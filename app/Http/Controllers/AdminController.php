<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Climber;
use App\Route;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $climber = new Climber;
        $route = new route;

        $climbers = $climber->all();
        $routes = $route->all();

        return view('admin.index', [
          'routes' => $routes,
          'climbers' => $climbers,
        ]);
    }
}
