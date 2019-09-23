<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Climber;
use App\Route;
use App\Activity;

class ClimberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $climbers = Climber::with('routes')->get();
      $activity = Activity::with(['climber', 'route'])
        ->orderBy('updated_at', 'desc')
        ->take(5)
        ->get();

      if ($request->query('sort') == 'sport') {
        $climbers = $climbers->sortByDesc(function($climber) {
          return $climber->nines();
        });
      } else if ($request->query('sort') == 'boulder') {
        $climbers = $climbers->sortByDesc(function($climber) {
          return $climber->eights();
        });
      } else {
        $climbers = $climbers->sortBy('name');
      }

      return view('climbers.index', [
        'climbers' => $climbers,
        'activity' => $activity
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('climbers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Climber::create($request->all());

        $request->session()->flash('success', 'Climber was saved');
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Climber  $climber
     * @return \Illuminate\Http\Response
     */
    public function show(Climber $climber)
    {
      return view('climbers.show', ['climber' => $climber]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Climber  $climber
     * @return \Illuminate\Http\Response
     */
    public function edit($climber)
    {
        $routes = Route::all(['id', 'name', 'difficulty']);

        return view('climbers.edit', [
          'climber' => $climber,
          'routes' => $routes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Climber  $climber
     * @return \Illuminate\Http\Response
     */
    public function update(Climber $climber, Request $request)
    {
      if ($route_id = $request->post('route-ascent-add')) {
        $climber->routes()->attach($route_id);

        $request->session()->flash('success', 'Route ascent registered');
        return redirect('/climbers/' . $climber->id . '/edit');
      }

      if ($route_id = $request->post('route-ascent-del')) {
        $climber->routes()->detach($route_id);

        $request->session()->flash('success', 'Route ascent removed');
        return redirect('/climbers/' . $climber->id . '/edit');
      }

       $climber->update($request->all());

       $request->session()->flash('success', 'Climber updated');
       return redirect('/climbers/' . $climber->id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Climber  $climber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Climber $climber, Request $request)
    {
        Activity::where('climber_id', $climber->id)->delete();

        $climber->delete();

        $request->session()->flash('success', 'Climber has beed deleted');
        return redirect('/admin');
    }
}
