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
        // in principe zou je hier ook moeten checken of de kamer niet geboekt is
        $reservation = Reservation::create($request->all());

        Mail::to($reservation->client->email)->queue(new ReservationCreated($reservation));

        return redirect()->route('reservations');
    }
}
