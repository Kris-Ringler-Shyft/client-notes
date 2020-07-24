<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Client;

class HomeController extends Controller
{
    public function index()
    {
        /* area that collects all notes and loops them into a variable */
        $notes = Note::all();
        $clients = Client::all();


        return view('home', [
            'notes' => $notes
        ]);
    }
}
