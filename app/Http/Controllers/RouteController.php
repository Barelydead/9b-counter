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

        return view('routes.index', ['routes' => $routes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('routes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Route::create($request->all());

      $request->session()->flash('success', 'Route was created');
      return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        return view('routes.show', ['route' => $route]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        $climbers = Climber::all(['id', 'name']);

        return view('routes.edit', [
          'route' => $route,
          'climbers' => $climbers
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
      if ($climber_id = $request->post('climber-ascent-add')) {
        $route->climbers()->attach($climber_id);

        $request->session()->flash('success', 'Route ascent added');
        return redirect('/routes/' . $route->id . '/edit');
      }

      if ($climber_id = $request->post('climber-ascent-del')) {
        $route->climbers()->detach($climber_id);

        $request->session()->flash('success', 'Route ascent removed');
        return redirect('/routes/' . $route->id . '/edit');
      }

      $route->update($request->all());

      $request->session()->flash('success', 'Route updated');
      return redirect('/routes/' . $route->id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route, Request $request)
    {
      Activity::where('route_id', $route->id)->delete();

      $route->delete();

      $request->session()->flash('success', 'Route has beed deleted');
      return redirect('/admin');
    }
}
