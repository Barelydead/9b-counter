<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Climber;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
