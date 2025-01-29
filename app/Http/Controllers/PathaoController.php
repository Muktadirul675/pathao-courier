<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Enan\PathaoCourier\Facades\PathaoCourier;

class PathaoController extends Controller
{
    public function create_order(Request $request){
        $res = PathaoCourier::CREATE_ORDER($request);
        return response()->json($res, 200);
    }

    public function cities(Request $request){
        $list = PathaoCourier::GET_CITIES();
        Log::info("hello from pathao");
        return response()->json($list,200);
    }
    public function zones(Request $request){
        $city = $request->query('city');
        Log::info("Getting zones");
        $list = PathaoCourier::GET_ZONES($city);
        return response()->json($list,200);
    }
    public function areas(Request $request){
        $zone = $request->query('zone');
        $list = PathaoCourier::GET_AREAS($zone);
        return response()->json($list,200);
    }
}
