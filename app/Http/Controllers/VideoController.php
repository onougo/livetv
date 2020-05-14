<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function create(){
        return view('create_video');
    }

    public function edit(){
        return view('edit_video');
    }

    public function video(){
        return view('video');
    }

    public function detail(){
        return view('video_detail');
    }
}
