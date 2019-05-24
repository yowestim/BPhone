<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboard = ModelUser::all();
        return view('dashboard', ['ModelUser'=>$dashboard]);
    }

    public function adminLogin(Request $request){
        $dashboard = ModelUser::all();
        
        $loginStatus = $request->session()->has('loginStatus');
        if ($loginStatus == "true"){
            return redirect('/Admin/Dashboard');
        } else{
            return view('login_admin', ['ModelUser'=>$dashboard , ' ']);
        }
    }

    public function postLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if(!Auth::attempt(['username'=>$username,'password'=>$password])){
            $request->session()->put('loginStatus', 'true');
            return redirect('/Admin/Dashboard');
        }else{
            return redirect('/Admin');
        }
    }
}