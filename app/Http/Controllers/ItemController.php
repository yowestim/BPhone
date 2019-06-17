<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use App\ModelColor;
use App\ModelMerk;
use App\ModelItem;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $user = ModelUser::all();
        $item = ModelItem::all();
        $loginStatus = $request->session()->has('loginStatus');

        if ($loginStatus == "true"){
            return view('content_item_admin', compact('item'),['ModelUser'=>$user]);
        } else{
            return redirect('/Admin');
        }
    }

    public function addItem()
    {
        $dataColor = ModelColor::all();
        $dataMerk = ModelMerk::all();
        
        return view('content_item_add_admin', compact('dataColor','dataMerk'));
    }

    public function saveItem(Request $request)
    {
        $data = new ModelItem();
        $status = "SOLD OUT";
        if($data->item_total == "0"||$data->item_total == null){
            $status = "READY";
        }
        $data->item_name=$request->name;
        $data->item_total=$request->quantity;
        $data->item_price=$request->price;
        $data->item_status=$status;
        $data->item_description=$request->description;
        $data->color_id=$request->color;
        $data->merk_id=$request->merk;
        $data->save();

        return redirect('/Admin/Item');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('loginStatus');
        return redirect('/Admin');
    }
}
