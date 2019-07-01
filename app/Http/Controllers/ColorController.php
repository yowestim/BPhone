<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use App\ModelColor;
use DB;

class ColorController extends Controller
{
    public function index(Request $request)
    {
        $item = ModelUser::all();
        $dataColor = ModelColor::all();
        $loginStatus = $request->session()->has('loginStatus');

        if ($loginStatus == "true"){
            return view('content_color_admin', compact('dataColor'));
        } else{
            return redirect('/Admin');
        }
    }

    public function addColor(Request $request)
    {
        $data = new ModelColor();
        $data->color_name=$request->color;
        $data->hex_color=$request->hex_color;
        $data->save();
        return redirect('/Admin/Color');
    }

    public function deleteColor($id)
    {
        $dataColor = ModelColor::where('id_color', $id)->delete();

        return redirect('/Admin/Color');
    }

}
