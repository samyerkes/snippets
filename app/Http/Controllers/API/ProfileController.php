<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function regnerateToken()
    {
        $token = str_random(60);
        $user = Auth::guard('api')->user();
        $user->api_token = $token;
        $user->save();
        return $token;
    }
}
