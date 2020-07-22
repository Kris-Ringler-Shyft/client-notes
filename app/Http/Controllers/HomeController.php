<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class HomeController extends Controller
{
    public function index()
    {
        /* area that collects all notes and loops them into a variable */
        $notes = Note::all();


        return view('home', [
            'notes' => $notes
        ]);
    }
}
