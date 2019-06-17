<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use App\ModelMerk;

class MerkController extends Controller
{
    public function index(Request $request)
    {
        $item = ModelUser::all();
        $dataMerk = ModelMerk::all();
        $loginStatus = $request->session()->has('loginStatus');

        if ($loginStatus == "true"){
            return view('content_merk_admin', compact('dataMerk'));
        } else{
            return redirect('/Admin');
        }
    }

    public function addMark(Request $request)
    {
        $data = new ModelMerk();
        $data->merk_name = $request->merk;
        $data->save();
        return redirect('/Admin/Mark');    }
}
