<?php

namespace App\Http\Controllers;

use App\CounterRow;
use App\Climber;
use Illuminate\Http\Request;


class CounterRowController extends Controller
{
    /**
     * Set auth for admin routes
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('counterrows.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CounterRow::create($request->all());

        $climber_id = $request->climber_id;
        $counter_id = $request->counter_id;
        $route_id = $request->route_id;

        $climber = Climber::find($climber_id);

        if ($climber->counters()->find($counter_id) != null) {
          $climber->counters()->attach($request->counter_id);
        }

        if ($climber->routes()->find($route_id) != null) {
          $climber->routes()->attach($request->route_id);
        }

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CounterRow $counterRow)
    {
        return view('counterrows.edit', compact('counterRow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CounterRow $counterRow)
    {
        $counterRow->update($request->all());

        $request->session()->flash('success', 'Counter updated');
        return redirect(route('counterRows.edit', $counterRow->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CounterRow $counterRow, Request $request)
    {
      $counterRow->delete();

      $request->session()->flash('success', 'Row has been deleted');
      return redirect(route('counterRows.admin-index'));
    }

    /**
     * Display a admin listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex(Request $request)
    {
      $counterRows = CounterRow::all();

      return view('counterRows.admin-index', [
        'counterRows' => $counterRows,
      ]);
    }
}
