<?php

namespace App\Http\Controllers;

use App\Chamber;
use Illuminate\Http\Request;

class ChamberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Chamber  $chamber
     * @return \Illuminate\Http\Response
     */
    public function show(Chamber $chamber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chamber  $chamber
     * @return \Illuminate\Http\Response
     */
    public function edit(Chamber $chamber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chamber  $chamber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $chamber)
    {
        $chamner = Chamber::find($chamber);
        $chamner->status = $request->status;
        $chamner->day_from = $request->day_from;
        $chamner->day_to = $request->day_to;
        $chamner->evening_from = $request->evening_from;
        $chamner->evening_to = $request->evening_to;
        $chamner->save();

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chamber  $chamber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chamber $chamber)
    {
        //
    }
}
