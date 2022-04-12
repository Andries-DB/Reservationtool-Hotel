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
        $validator = Validator::make(request()->all(), [
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after:start_date',
        ]);

        $start = $request->start_date;
        $end = $request->end_date;

        $rooms = [];
        $reserved_rooms = [];
        if (!$validator->fails() && $start && $end) {
            $reserved_rooms = Reservation::whereBetween('start_date', [$start, $end])
                            ->orWhereBetween('end_date', [$start, $end])
                            ->orWhere(function($query) use ($start, $end) {
                                $query->where('start_date', '<', $start)->where('end_date', '>', $end);
                            })->pluck('room_id')->toArray();

            $rooms = Room::orderBy('number')->get();
        }

        return view('pages.reservations.create', [
            'client' => $client,
            'rooms' => $rooms,
            'reserved_rooms' => $reserved_rooms,
            'start_date' => $start,
            'end_date' => $end,
        ])->withErrors($validator);
    }
}
