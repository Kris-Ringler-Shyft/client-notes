<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function create(Request $request)
    {

        $client = new Client();
        $client->name = $request->name;


        $client->save();

        return redirect('/');
    }
}
