<?php

namespace App\Http\Controllers\Clients\Update;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ShowUpdateController extends Controller
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
        return view('pages.clients.update', [
            'client' => $client,
        ]);
    }
}
