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
        $dataLogin = $request->session()->has('username');
        $view = $request->session()->has('view');

        if ($loginStatus == "true"){
            return view('dashboardAdmin', ['ModelUser'=>$dashboard,$view]);
        } else{
            return redirect('/Admin');
        }
    }

    public function Item($view)
    {
        $view = Session::put('view','content_dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('loginStatus');
        return redirect('/Admin');
    }
}
