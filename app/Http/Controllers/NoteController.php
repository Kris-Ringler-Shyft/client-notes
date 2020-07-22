<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    public function create(Request $request)
    {

        $note = new Note();
        $note->title = $request->title;
        $note->content = $request->content;

        $note->save();

        return redirect('/');
    }


    public function view($id)
    {
        $note = Note::findOrFail($id);
        return view('note', [
            'note' => $note
        ]);
    }
}
