<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\room;

use App\Feature;

use Session;

use DB;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $campus = $request->Campus;
        $range = $request->Range;

        switch($range){
            case('query3'):
                $rooms = DB::table('rooms')->where('Campus', $campus)->where('Rooms_available', '>', 0)->where('Rental_per_month', '>', 7500)->paginate(3);
                return view('pages.rooms')->with('rooms' , $rooms);
                break;

            case('query2'):
            $rooms = DB::table('rooms')->where('Campus', $campus)->where('Rooms_available', '>', 0)->where('Rental_per_month', '<', 7500)->paginate(3);
                return view('pages.rooms')->with('rooms' , $rooms);
                break;
            
            case('query1'):
            $rooms = DB::table('rooms')->where('Campus', $campus)->where('Rooms_available', '>', 0)->where('Rental_per_month', '<', 5000)->paginate(3);
                return view('pages.rooms')->with('rooms' , $rooms);
                break;

            default;
                return ("Problem parsing query");
            }

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
    public function show($id)
    {   
        $features = Feature::find(1);

        $specific = room::find($id);
        session::put('specific', $specific);
        return view('pages.room_details')->with('specific', $specific)->with('features', $features);
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
