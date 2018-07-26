<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\room;

use App\regulation;

use App\Institution;

use App\Enquire;

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
                $rooms = DB::table('rooms')->where('Campus', $campus)->where('Rooms_available', '>', 0)->where('Rental_per_month', '>', 7501)->paginate(3);
                return view('pages.rooms')->with('rooms' , $rooms);
                break;

            case('query2'):
            $rooms = DB::table('rooms')->where('Campus', $campus)->where('Rooms_available', '>', 0)->where('Rental_per_month', '>', 5000)->where('Rental_per_month', '<', 7501)->paginate(3);
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
        //Adding a comment to test
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                 //Create enquiry
                 $enquire = new Enquire;
                 $enquire->firstName = $request->input('firstName');
                 $enquire->lastName = $request->input('lastName');
                 $enquire->email = $request->input('email');
                 $enquire->phone = $request->input('phone');
                 $enquire->Message = $request->input('Message');
                 $enquire->save();

                 return response()->json(['success'=>'Enquiry is successfully sent']);
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Room_id)
    {   
        $specific = room::find($Room_id);
        session::put('specific', $specific);
        $institutions = Institution::where("Room_id", $Room_id)->get();
        $features = Feature::where("Room_id", $Room_id)->get();
        $regulations = regulation::where("Room_id", $Room_id)->get();
        
        return view('pages.room_details')->with('specific', $specific)
                ->with('features', $features)->with('regulations', $regulations)
                ->with('institutions', $institutions);
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
