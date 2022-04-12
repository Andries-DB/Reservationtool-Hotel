<?php

namespace App\Http\Controllers\Clients\Update;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class UpdateClientController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param ClientRequest $request
     * @param Client $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(ClientRequest $request, Client $client)
    {
        // update client
        $client->fill($request->all());
        $client->save();

        // redirect to show clients
        return redirect()->route('clients');
    }
}
