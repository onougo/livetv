<?php

namespace App\Http\Controllers;

use App\Libraries\Messenger;
use Illuminate\Http\Request;

class VideoController extends Controller
{
//    public function create(){
//        return view('create_video');
//    }

    public function create(Request $request,Messenger $messenger )
    {

        $request -> validate([
            'video_title' => 'required',
            'video_category' => 'required',
            'video_file' => 'required',
            'video_banner' => 'required',
        ]);

        $dataArr = array(
            'video_title' => $request->post("video_title"),
            'video_category' => $request->post("video_category"),
            'video_file' => $request->post("video_file"),
            'video_banner' => $request->post("video_banner"),

        );

        // dd($dataArr);


        $response = $messenger->postApi($dataArr,"church/register");

        // dd($response);


        if($response->status){

            return Redirect::to("/video")->with("message",$response->message)->with("type","success");

            exit;

        }else {

            return Redirect::to("/create")->with("message", $response->message)->with("type", 'danger');

        }
    }

    public function edit(){
        return view('edit_video');
    }

    public function

    video(Messenger $messenger){

        $video = $messenger->getApi("api/church/members")->data;

        return view('all_videos', compact('video'));

    }

    public function detail(){
        return view('video_detail');
    }


}
