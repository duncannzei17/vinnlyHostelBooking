<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\room;

use App\User;

use App\Reservation;

use Auth;

use DB;

use Session;

class ReservationsController extends Controller
{
    //Middleware to check if user is logged in.
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //Store variable to be used for reservation
            $detail=session::get('specific');
            $values = [
                   "image" => $detail->Image1,
                   "campus" => $detail->Campus,
                   "residence" => $detail->Residence_name,
                   "layout" => $detail->Layout,
                   "user" => Auth::user()->name,
                   "phone" => Auth::user()->phone
                ];
               
                return view('/home')->with('values', $values);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Store variable to be used for reservation
        $detail=session::get('specific');
        $campus = $detail->Campus;
        $residence = $detail->Residence_name;
        $layout = $detail->Layout;
        $landlord = $detail->Landlord;
        $contact = $detail->Contact;
        $user = Auth::user()->name;
        $phone = Auth::user()->phone;

        //Check if user has made a booking before
        $booking = DB::table('reservations')->where('Phone', $phone)->get();
        $count = count($booking);
        if($count > 0){
             $error = "You have already made a booking.";
             return back()->with('error', $error);
        }else{
            //Create reservation in reservations table
            $reservation = new reservation;
            $reservation->User = $user;
            $reservation->phone = $phone;
            $reservation->Campus =$campus;
            $reservation->Residence_name =$residence;
            $reservation->Layout =$layout;
            $reservation->Landlord =$landlord;
            $reservation->Landlord_contact =$contact;     
            $reservation->save();
            
            $result = "Room reserved successfully.";
            return back()->with('result', $result);
        }
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
        //
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
