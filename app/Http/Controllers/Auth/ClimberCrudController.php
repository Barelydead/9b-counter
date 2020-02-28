<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Climber;
use App\Route;
use App\Activity;
use App\Http\Controllers\Controller;

class ClimberCrudController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $activeQuery = $request->getQueryString();

      $order = $request->query('order') === 'age' ||
               $request->query('order') === 'name'
               ? $request->query('order')
               : 'id';

      $direction = $request->query('direction') === 'asc' ? 'asc' : 'desc';

      $climbers = Climber::orderBy($order, $direction)->simplePaginate(10);

      return view('admin.climbers.index', [
        'climbers' => $climbers,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.climbers.create');
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
        return redirect('/admin/climbers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Climber  $climber
     * @return \Illuminate\Http\Response
     */
    public function show(Climber $climber)
    {
      return view('admin.climbers.show', ['climber' => $climber]);
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

        return view('admin.climbers.edit', [
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
        return redirect('admin/climbers/' . $climber->id . '/edit');
      }

      if ($route_id = $request->post('route-ascent-del')) {
        $climber->routes()->detach($route_id);

        $request->session()->flash('success', 'Route ascent removed');
        return redirect('/admin/climbers/' . $climber->id . '/edit');
      }

       $climber->update($request->all());

       $request->session()->flash('success', 'Climber updated');
       return redirect('/admin/climbers/' . $climber->id . '/edit');
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
        return redirect('/admin/climbers');
    }
}
