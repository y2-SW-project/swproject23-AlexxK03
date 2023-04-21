<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Booking;
use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TripController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        // $trips = Trip::where('user_id',Auth::id())->latest('updated_at')->get(); // The auth id isnt working
        $trips = Trip::where('user_id', Auth::id())->latest('updated_at')
        ->paginate(5);
        // dd($trips);
        return view('trips.index')->with('trips', $trips);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bookings = Booking::all();
        $docs = Documentation::all();

        return view('trips.create')->with('booking', $bookings)->with('documentation',$docs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
// dd("success");

        $request->validate([
            'destination' => 'required',
            'booking_id' => 'required'
        ]);
        
        Trip::create([
            'user_id' => Auth::id(),
            'destination' => $request->destination,
            'booking_id' => $request->booking_id,
            'documentation_id' => $request->booking_id,

        ]);


        return to_route('trips.index')->with('success','Trip created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        $user = Auth::user();

        if ($trip->user_id != Auth::id()) {
            return abort(403);
        }
        return view('trips.show')->with('trip', $trip);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {

        $bookings = Booking::all();

        if($trip->user_id != Auth::id()){
            return abort(403);
        }

        return view('trips.edit')->with('trip',$trip)->with('booking',$bookings);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        $request->validate([
            'destination' => 'required',
            'booking_id' => 'required'
        ]);

        $trip->update([
            'destination'=>$request->destination,
            'booking_id'=>$request->booking_id
        ]);

        return to_route('trips.show',$trip)->with('success','Trip updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        if ($trip->user_id != Auth::id()) {
            return abort(403);
        }

        $trip->delete();

        return to_route('trips.index');
    }
}
