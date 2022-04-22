<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        // Getting all the clients out of the database
        $clients = Client::all();

        // returning specific view with the clients
        return view('pages.clients.index', [
            'clients' => $clients,
        ]);
    }
}
