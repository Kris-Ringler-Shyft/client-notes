<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class HomeController extends Controller
{
    public function index()
    {
        /* area that collects all notes and loops them into a variable */
        $clients = Client::all();


        return view('home', [
            'clients' => $clients
        ]);
    }
}
