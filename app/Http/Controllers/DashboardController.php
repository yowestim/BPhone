<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboard = user::all();
        return view('dashboard', ['ModelUser'=>$dashboard]);
    }

    public function adminLogin(){
        $dashboard = user::all();
        return view('login_admin', ['ModelUser'=>$dashboard , ' ']);
    }

    public function getLogin(Type $var = null)
    {
        redirect('DashboardController@index');
    }

    public function postLogin(Type $var = null)
    {
        dd('Login OK');
    }
}
