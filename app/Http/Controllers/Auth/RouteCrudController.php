<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Route;
use App\Climber;
use App\Activity;
use App\Http\Controllers\Controller;

class RouteCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $order = $request->query('order') === 'name' ||
      $request->query('order') === 'type'
      ? $request->query('order')
      : 'id';

      $direction = $request->query('direction') === 'asc' ? 'desc' : 'asc';

      $routes = Route::orderBy($order, $direction)->simplePaginate(10);

      return view('admin.routes.index', [
        'routes' => $routes,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.routes.create');
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
      return redirect('/admin/routes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        return view('admin.routes.show', ['route' => $route]);
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

        return view('admin.routes.edit', [
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
        return redirect('/admin/routes/' . $route->id . '/edit');
      }

      if ($climber_id = $request->post('climber-ascent-del')) {
        $route->climbers()->detach($climber_id);

        $request->session()->flash('success', 'Route ascent removed');
        return redirect('/admin/routes/' . $route->id . '/edit');
      }

      $route->update($request->all());

      $request->session()->flash('success', 'Route updated');
      return redirect('/admin/routes/' . $route->id . '/edit');
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
      return redirect('/admin/routes');
    }
}
