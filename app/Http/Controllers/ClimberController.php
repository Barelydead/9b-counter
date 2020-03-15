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
        return redirect(route('climbers.admin-index'));
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
        $routes = Route::all(['id', 'name', 'grade']);

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
       $climber->update($request->all());

       $request->session()->flash('success', 'Climber updated');
       return redirect(route('climbers.edit', $climber->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Climber  $climber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Climber $climber, Request $request)
    {
        $climber->delete();

        $request->session()->flash('success', 'Climber has been deleted');
        return redirect(route('climbers.admin-index'));
    }

    /**
     * Display a admin listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex(Request $request)
    {
      $climbers = Climber::all();

      return view('climbers.admin-index', [
        'climbers' => $climbers,
      ]);
    }
}
