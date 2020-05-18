<?php

namespace App\Http\Controllers;

use App\Parking_lot;
use Illuminate\Http\Request;
use App\Http\Requests\StoreParking_lot;

class Parking_lotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $parking_lots = Parking_lot::orderBy('name')->paginate(10);
        return view('parking_lot.index', ['parking_lots'=>$parking_lots]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("parking_lot.create", ['parking_lot'=>new Parking_lot()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParking_lot $request)
    {
        $parking_lot = Parking_lot::create($request->validated());

        return back()->with('status', 'El registro se ha hecho con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parking_lot  $parking_lot
     * @return \Illuminate\Http\Response
     */
    public function show(Parking_lot $parking_lot)
    {

        $parking_spots = $parking_lot->parking_spots()->paginate(10);

        return view("parking_lot.show", ['parking_lot'=>$parking_lot,'parking_spots'=>$parking_spots]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parking_lot  $parking_lot
     * @return \Illuminate\Http\Response
     */
    public function edit(Parking_lot $parking_lot)
    {
        //
        return view("parking_lot.edit", ['parking_lot'=>$parking_lot]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parking_lot  $parking_lot
     * @return \Illuminate\Http\Response
     */
    public function update(StoreParking_lot $request, Parking_lot $parking_lot)
    {
        $parking_lot->update($request->validated());

        return back()->with('status', 'El parqueadero se ha modificado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parking_lot  $parking_lot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parking_lot $parking_lot)
    {
        $parking_lot->parking_spots()->delete();
        $parking_lot->delete();
        return back()->with('status', 'El Parqueadero se ha eliminado con éxito.');
    }
}
