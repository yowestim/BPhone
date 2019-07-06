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
        $item = ModelItem::count();
        $dataItem = ModelItem::all();
        return view('dashboard_allproduct', compact('dataItem', 'item'));
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

        if($username == 'admin' && $password == 'admin'){
            if(!Auth::attempt(['username'=>$username,'password'=>$password])){
                $request->session()->put('loginStatus', 'true');
                session(['username' => $username]);
                return redirect('/Admin/Dashboard');
            }else{
                return redirect('/Admin');
            }
        }else{
            return redirect('/Admin');
        }
    }
    
    public function loginUsers(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $user = ModelUser::where('username', $username)->first();

        if($user->username == $username && $user->password == $password){
            $request->session()->put('loginUser', 'true');
            session(['usernameUser' => $username]);
            return redirect('/Dashboard');
        }else{
            return redirect('/Dashboard');
        }
    }

    public function registerUser(Request $request)
    {
        $data = new ModelUser();
        $status = "user";

        $data->username = $request->username;
        $data->password = $request->password;
        $data->status = $status;
        $data->save();

        $username = $request->username;
        $password = $request->password;
        $user = ModelUser::where('username', $username)->first();

        if($user->username == $username && $user->password == $password){
            $request->session()->put('loginUser', 'true');
            session(['usernameUser' => $username]);
            return redirect('/Dashboard');
        }else{
            return redirect('/Dashboard');
        }

        return redirect('/Dashboard');
    }

    public function logoutUser(Request $request)
    {
        $request->session()->forget('loginUser');
        $request->session()->forget('usernameUser');
        return redirect('/Dashboard');
    }
}