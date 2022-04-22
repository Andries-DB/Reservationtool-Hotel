<?php

namespace App\Http\Controllers\Reservations\Create;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShowCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Client $client
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request, Client $client)
    {

        $r_date_start = $request->date_start;
        $r_date_end = $request->date_end;

        $rooms = [];
        $reserved_rooms = [];
        if ($r_date_start && $r_date_end) {
            $reserved_rooms = Reservation::whereBetween('date_start', [$r_date_start, $r_date_end])
                            ->orWhereBetween('date_end', [$r_date_start, $r_date_end])
                            ->orWhere(function($query) use ($r_date_start, $r_date_end) {
                                $query->where('date_start', '<', $r_date_start)->where('date_end', '>', $r_date_end);
                            })->pluck('room_id')->toArray();

            $rooms = Room::orderBy('id')->get();
        }

        return view('pages.reservations.create', [
            'client' => $client,
            'rooms' => $rooms,
            'reserved_rooms' => $reserved_rooms,
            'start_date' => $r_date_start,
            'end_date' => $r_date_end,
        ]);
    }
}
