<?php

namespace App\Http\Controllers;
use App\Parking_historie;
use App\Parking_spot;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\StoreParkingHistoryPost;

class Parking_historyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin')->only('edit', 'update','destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parking_histories = Parking_historie::orderBy('created_at','desc')->paginate(6);
        return view('parking_histories.index', ['parking_histories'=>$parking_histories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role','useruam')->get();
        $parking_spots = Parking_spot::where("state",'Disponible')->get();
        
        return view("parking_histories.create", ['parking_history'=>new Parking_historie(),'users'=>$users, 'parking_spots'=>$parking_spots]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParkingHistoryPost $request)
    {  
        $parking_history = Parking_historie::create($request->validated());
        $parking_spot = $parking_history->spot()->get()->first();
        $parking_spot->state = 'Ocupado';
        $parking_spot->update();
        return back()->with('status', 'El registro se ha hecho con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Parking_historie $parking_history)
    {
        $user = $parking_history->user()->get()->first();
        $parking_spot = $parking_history->spot()->get()->first();
        return view("parking_histories.show", ['parking_history'=>$parking_history,'user'=>$user, 'parking_spot'=>$parking_spot]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Parking_historie $parking_history)
    {
        $users = User::where('role','useruam')->get();
        $parking_spots = Parking_spot::where("state",'Disponible')->get();
        return view("parking_histories.edit", ['parking_history'=>$parking_history,'users'=>$users, 'parking_spots'=>$parking_spots]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreParkingHistoryPost $request, Parking_historie $parking_history)
    {
        $parking_history->update($request->validated());

        return back()->with('status', 'El registro se ha modificado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parking_history = Parking_historie::find($id);
        $parking_history->delete();
        return back()->with('status', 'El registro se ha eliminado con éxito.');
    }

    public function dateFilter(Request $date){

       
        $parking_histories = Parking_historie::where('created_at', 'like',request('date').'%')->orderBy('created_at','desc')->paginate(6);
        
        return view('parking_histories.index', ['parking_histories'=>$parking_histories]);


    }
}
