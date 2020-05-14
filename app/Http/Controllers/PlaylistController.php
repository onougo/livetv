<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function play(){
        return view('create_playlist');
    }

    public function playlist(){
        return view('playlist');
    }
}
