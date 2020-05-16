<?php

namespace App\Http\Controllers;

use App\Libraries\Messenger;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
//    public function play(){
//        return view('create_playlist');
//    }


    public function play(Request $request,Messenger $messenger )
    {

        $request -> validate([
            'playlist_title' => 'required',
            'category_name' => 'required',
            'videos' => 'required',
            'banner' => 'required',
        ]);

        $dataArr = array(
            'playlist_title' => $request->post("playlist_title"),
            'category_name' => $request->post("category_name"),
            'videos' => $request->post("videos"),
            'banner' => $request->post("banner"),

        );

        // dd($dataArr);


        $response = $messenger->postApi($dataArr,"church/register");

        // dd($response);


        if($response->status){

            return Redirect::to("/playlist")->with("message",$response->message)->with("type","success");

            exit;

        }else {

            return Redirect::to("/create_playlist")->with("message", $response->message)->with("type", 'danger');

        }
    }

    public function playlist(Messenger $messenger){

        $playlist = $messenger->getApi("api/church/members")->data;

        return view('playlist', compact('playlist'));

    }

    public function details(){
        return view('playlist_detail');
    }
}
