<?php

namespace App\Http\Controllers;


class MessagesController extends Controller
{
    public function store(){
    request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'content' => 'required'

    ]);
    return 'Datos validados';
    }
}
