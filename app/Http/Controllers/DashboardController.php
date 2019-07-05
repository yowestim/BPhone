<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use App\ModelItem;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $dataItem = ModelItem::all();
        $dashboard = ModelUser::all();
        $item = ModelItem::count();
        return view('dashboard', compact('item','dataItem','dashboard'));
    }

    public function allProduct()
    {
        $dataItem = ModelItem::all();
        return view('dashboard_allproduct', compact('dataItem'));
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
            session(['username' => $username]);
            return redirect('/Admin/Dashboard');
        }else{
            return redirect('/Admin');
        }
    }
}