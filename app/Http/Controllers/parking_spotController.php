<?php

namespace App\Http\Controllers;

use App\Parking_spot;
use App\Parking_lot;
use Illuminate\Http\Request;
use App\Http\Requests\StoreParking_spot;

class parking_spotController extends Controller
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
        $parking_lots = Parking_lot::all();
        return view("parking_spot.create", ['parking_spot'=>new Parking_spot(),'parking_lots'=>$parking_lots]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParking_spot $request)
    {
        $parking_spot = Parking_spot::create($request->validated());

        return back()->with('status', 'El registro se ha hecho con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Parking_spot $parking_spot)
    {

        return view("parking_spot.show", ['parking_spot'=>$parking_spot]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Parking_spot $parking_spot)
    {
        $parking_lots = Parking_lot::all();
        return view("parking_spot.edit", ['parking_spot'=>$parking_spot,'parking_lots'=>$parking_lots]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreParking_spot $request, Parking_spot $parking_spot)
    {
        $parking_spot->update($request->validated());

        return back()->with('status', 'El espacio se ha modificado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parking_spot $parking_spot)
    {
        $parking_spot->delete();
        return back()->with('status', 'El espacio se ha eliminado con éxito.');
    }
}
