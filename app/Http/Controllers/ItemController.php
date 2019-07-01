<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelUser;
use App\ModelColor;
use App\ModelMerk;
use App\ModelItem;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $user = ModelUser::all();
        // $item = ModelItem::all();
        // $color = ModelColor::all();
        $item = DB::table('item')
        ->join('color', 'item.color_id' , '=' , 'color.id_color')
        ->join('merk', 'item.merk_id' , '=', 'merk.id_merk')
        ->get();
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

    public function updateItem($id)
    {
        $dataItem = ModelItem::find($id);
        $dataColor = ModelColor::all();
        $dataMerk = ModelMerk::all();

        return view('content_item_update_admin', compact('dataItem','dataColor','dataMerk'));
    }

    public function updateItemSave(Request $request, $id)
    {
        $dataItem = ModelItem::find($id);

        if($dataItem->item_total == "0"){
            $status = "Sold Out";
        }else{
            $status = "Ready";
        }

        $dataItem->item_name=$request->name;
        $dataItem->item_total=$request->quantity;
        $dataItem->item_price=$request->price;
        $dataItem->item_status=$status;
        $dataItem->item_description=$request->description;
        $dataItem->color_id=$request->color;
        $dataItem->merk_id=$request->merk;
        $dataItem->save();

        return redirect('/Admin/Item');
    }

    public function saveItem(Request $request)
    {
        $data = new ModelItem();
        $status = "Sold Out";
        if($data->item_total == "0"||$data->item_total == null){
            $status = "Ready";
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

    public function deleteItem($id)
    {
        $item = ModelItem::where('id_item', $id)->delete();

        return redirect('/Admin/Item');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('loginStatus');
        return redirect('/Admin');
    }
}
