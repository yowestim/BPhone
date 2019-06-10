<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;

class MerkController extends Controller
{
    public function index(Request $request)
    {
        $item = ModelUser::all();
        $loginStatus = $request->session()->has('loginStatus');

        if ($loginStatus == "true"){
            return view('content_merk_admin', ['ModelUser'=>$item]);
        } else{
            return redirect('/Admin');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('loginStatus');
        return redirect('/Admin');
    }
}