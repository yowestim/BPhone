<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $dashboard = ModelUser::all();
        $loginStatus = $request->session()->has('loginStatus');

        if ($loginStatus == "true"){
            return view('content_dashboard', ['ModelUser'=>$dashboard]);
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
