<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    // Question 1 answer
//    function demoAction(Request $request){
//        $name = $request->input('name');
//    }



    // Question 2 answer
//    function demoAgent(Request $request){
//        $userAgent = $request->header('User-Agent');
//    }


    // Question 3 answer
//    function demoAgent(Request $request){
//        $page = $request->query('page',null);
//    }


    // Question 4 answer
//    function demoJeson(){
//        $data = [
//            'message' => 'Success',
//            'data' => [
//                'name' => 'John Doe',
//                'age' => 25
//            ]
//        ];
//
//        return response()->json($data);
//    }


    // Question 5 answer
//    function demoFile(Request $request){
//
//            $file = $request->file('avatar');
//            $filename = $file->getClientOriginalName();
//            $file->move(public_path('uploads'), $filename);
//            return true;
//
//    }


    // Question 6 answer
//    function demoCookie(Request $request){
//        $rememberToken = $request->cookie('remember_token',null);
//        return $rememberToken;
//    }


    // Question 7 answer
    function demoEmail(Request $request){
        $email = $request->input('email');

        $response = [
            'success' => true,
            'message' => 'Form submitted successfully.'
        ];

        return response()->json($response);
    }

}
