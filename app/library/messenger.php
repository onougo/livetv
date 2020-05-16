<?php

namespace App\Libraries;

use App\Loan;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;
use Validator;

class Messenger
{
    //

    public function postApi($dataArr,$endpoint)
    {
        $headers = [
            'Application-Key' => '09876',
            'Accept-Encoding' => 'gzip,deflate',
            'Content-Type' => 'application/json'
        ];

        //6d06929e1bd6d409808d3e04c8a17bb0

        $client =  new Client(['headers' => $headers]);

        try {
            //  echo "I dgot here";exit;
            $response = $client->post(env('API_HOST').$endpoint, [
                'form_params' => $dataArr,
            ]);


            return json_decode($response->getBody(true)->getContents());


        }catch (ClientException $exception) {

            $response = $exception->getResponse()->getBody(true)->getContents();
            $res = json_decode($response);
            return $res;

            /* return Redirect::route("showAddBank")
                 ->with('message',$res->message)
                 ->with('type','danger');*/
        }
    }




    public function getApi($endpoint)
    {

        // if (Session::get('user')[0]["token"]) {
        //     $token = Session::get('user')[0]["token"];
        // }else{
        //     $token = "";
        // }

        $headers = [
            'Application-Key' => '09876',
            'Accept-Encoding' => 'gzip,deflate',
            'Content-Type' => 'application/json'
        ];

        $client =  new Client(['headers' => $headers]);

        try {
            //  echo "I dgot here";exit;
            $response = $client->get(env('API_HOST').$endpoint);
            return json_decode($response->getBody(true)->getContents());


        }catch (ClientException $exception) {

            $response = $exception->getResponse()->getBody(true)->getContents();
            $res = json_decode($response);

            return $res;

        }
    }


}
