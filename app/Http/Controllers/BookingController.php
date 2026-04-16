<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();

        return $bookings;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // echo($request);
        foreach ($request->arr as $item) {
            $booking = new Booking;
            // echo($request->arr);
            $booking->name = $item[0];
            $booking->phone = $item[1];
            $booking->date = $item[2];
            $booking->count_of_persons = $item[3];
            $booking->cost = $item[4];
            $booking->isConfirm = $item[5];
            $booking->sauna = $item[6];
            $booking->vat = $item[7];

            $booking->save();
        }
        // $post = Booking::create([

        // ]);
        // return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
    }
}
