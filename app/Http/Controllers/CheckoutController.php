<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelItem;
use App\ModelUser;
use App\ModelCart;
use Session;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = ModelUser::all();
        $item = ModelItem::all();
        $cartdata = ModelCart::join('transaction', 'transaction.id_transaction','cart.transaction_id')
        ->join('item', 'item.id_item' , '=' , 'cart.item_id')
        ->where('transaction.id_transaction', Session::get('idUser'))
        ->where('transaction.status', "true")
        ->get();

        return view('dashboard_checkout', compact('item', 'user', 'cartdata'));
    }
}
