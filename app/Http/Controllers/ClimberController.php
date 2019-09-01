<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Climber;
use App\Route;

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

      return view('climbers.index', ['climbers' => $climbers]);
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

        $request->session()->flash('success', 'Task was successful!');
        return redirect('/climbers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Climber $climber)
    {
      return view('climbers.show', ['climber' => $climber]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $climber)
    {
      if ($route_id = $request->post('route-ascent')) {
        $climber->routes()->attach($route_id);

        return redirect('/climbers/' . $climber->id);
      }

       $climber->update($request->all());

       return redirect('/climbers/' . $climber->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
