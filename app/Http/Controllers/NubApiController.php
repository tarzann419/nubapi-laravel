<?php

namespace App\Http\Controllers;

use Donejeh\Nuban\Nubapi;
use Illuminate\Http\Request;

class NubApiController extends Controller
{
    public function getFromInput(Request $request){
        $nubanApi = app(Nubapi::class);
        $response = $nubanApi->getAccountDetails($request->acc_no, $request->bank_code);

        dd($response);
        return response()->json($response);
    }


    public function getAccountDetails()
    {
        $nubanApi = app(Nubapi::class);
        $response = $nubanApi->getAccountDetails('0090559508', '232');

        dd($response);
        return response()->json($response);
    }
}
