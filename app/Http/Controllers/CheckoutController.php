<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelItem;
use App\ModelUser;
use App\ModelCart;
use App\ModelTransaction;
use Session;
use DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $data = ModelItem::all();
        $user = ModelUser::all();
        $cartdata = ModelCart::join('transaction', 'transaction.id_transaction','cart.transaction_id')
        ->join('item', 'item.id_item' , '=' , 'cart.item_id')
        ->where('transaction.users_id', Session::get('idUser'))
        ->where('transaction.status', "true")
        ->get();
        $trans = ModelTransaction::where('transaction.users_id', Session::get('idUser'))
        ->where('transaction.status', "true")->first();
    
        return view('dashboard_checkout', compact('data', 'user', 'cartdata','trans'));
    }
}
