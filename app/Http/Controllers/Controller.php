<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success(String $message){

        return response()->json([
            'code' => '100',
            'message' => $message,
        ], 200);

    }

    //When an operation is successful
    public function successResponse($data = null, String $message = null){

        if(!$message){
            $message = "Success";
        }
        return response()->json([
            'code' => '100',
            'message' => $message,
            'data' => $data,
        ], 200);

    }

    //When a connection is successful but operation failed
    public function error($data = null, String $message = null){

        if(!$message){
            $message = "Failed";
        }

        return response()->json([
            'code' => '418',
            'message'=> $message,
            'data' => $data,
        ], 200);

    }
}
