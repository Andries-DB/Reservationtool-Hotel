<?php

namespace App\Http\Controllers\Reservations\Create;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Mail\ReservationCreated;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(ReservationRequest $request)
    {
        // Making new reservation with given information
        $reservation = Reservation::create($request->all());

        // Sending a mail to clients mail with confirmation
        Mail::to($reservation->client->email)->queue(new ReservationCreated($reservation));

        // Returning to updated reservations table
        return redirect()->route('reservations');
    }
}
