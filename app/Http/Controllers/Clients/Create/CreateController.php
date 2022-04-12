<?php

namespace App\Http\Controllers\Clients\Create;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param ClientRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(ClientRequest $request)
    {
        // create client
        Client::create($request->all());

        // redirect to show clients
        return redirect()->route('clients');
    }
}
