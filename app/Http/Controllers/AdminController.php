<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use App\ModelItem;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $dashboard = ModelUser::all();
        $dataItem = ModelItem::count();
        $loginStatus = $request->session()->has('loginStatus');

        if ($loginStatus == "true"){
            return view('content_dashboard_admin', ['ModelUser'=>$dashboard], compact('dataItem'));
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
