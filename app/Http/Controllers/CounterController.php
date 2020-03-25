<?php

namespace App\Http\Controllers;

use App\Counter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Set auth for admin routes
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
      $counterGroups = Counter::orderByDesc('year')->get()->groupBy('year');

      return view('counters.index', compact('counterGroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('counters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create the slug and merge with request
        $slug = Str::slug("{$request->title} {$request->year}", '-');
        $slug = ['slug' => $slug];
        $request->merge($slug);

        $request->validate([
          'slug' => 'unique:counters',
        ]);

        $counter = Counter::create($request->all());

        return redirect("counters/$counter->slug/edit");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Counter $counter)
    {
      $rows = $counter->rows->groupBy('climber_id');
      $relatedCounters = Counter::where('year', $counter->year)->get();

      return view('counters.show', compact(['rows', 'counter', 'relatedCounters']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Counter $counter)
    {
        return view('counters.edit', compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Counter $counter)
    {
      $counter->update($request->all());

      $request->session()->flash('success', 'Counter updated');
      return redirect(route('counters.edit', $counter->slug));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counter $counter, Request $request)
    {
      $counter->delete();

      $request->session()->flash('success', 'Counter has been deleted');
      return redirect(route('counters.admin-index'));
    }

    /**
     * Display a admin listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex(Request $request)
    {
      $counters = Counter::all();

      return view('counters.admin-index', [
        'counters' => $counters,
      ]);
    }
}
