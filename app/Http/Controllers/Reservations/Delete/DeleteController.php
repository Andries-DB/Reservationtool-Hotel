<?php

namespace App\Http\Controllers\Reservations\Delete;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Reservation $reservation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations');
    }
}
