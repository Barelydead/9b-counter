<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Climber;
use App\Activity;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::all();

        return view('public.routes.index', ['routes' => $routes]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        return view('public.routes.show', ['route' => $route]);
    }
}
