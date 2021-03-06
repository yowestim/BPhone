<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelItem;
use App\ModelUser;
use App\ModelTransaction;
use App\ModelCart;
use App\ModelAccount;
use Session;
use DB;

class CartController extends Controller
{
    public function index()
    {
        $data = ModelItem::all();
        $user = ModelUser::all();
        $trans = ModelTransaction::where('transaction.users_id', Session::get('idUser'))
        ->where('transaction.status', "true")->first();
        $cart = DB::table('cart')
        ->join('transaction','transaction.id_transaction','cart.transaction_id')
        ->join('item', 'item.id_item' , '=' , 'cart.item_id')
        ->where('transaction.users_id', Session::get('idUser'))
        ->where('transaction.status', "true")
        ->get();

        return view('dashboard_cart', compact('data', 'user', 'cart', 'trans'));
    }
    
    public function deleteCart($id)
    {
        $dataCart = ModelCart::where('id_cart', $id)->delete();

        $dataTransactionCart = ModelCart::join('transaction','transaction.id_transaction','cart.transaction_id')
        ->where('transaction.users_id', Session::get('idUser'))
        ->where('transaction.status', "true")->first();

        if(empty($dataTransaction)){
            $dataTransaction = ModelTransaction::where('users_id',  Session::get('idUser'))
            ->where('status', "true")->first();
            $dataTransaction->status = "false";
            $dataTransaction->save();
        }else{
            return redirect('/Dashboard/Cart');
        }
        
        return redirect('/Dashboard/Cart');
    }

    public function addCart($id, Request $request)
    {
        $item = ModelItem::find($id);
        $loginStatus = $request->session()->has('loginUser');

        if ($loginStatus == "true"){

            $username = Session::get('usernameUser');
            $userdata = ModelUser::where('username', $username)->first();
            $transactiondata = ModelTransaction::where('users_id', $userdata->id_users)->where('status', "true")->first();
            // dd($transactiondata);

            if(empty($transactiondata)){
                $transaction = new ModelTransaction();

                $transaction->total = $item->item_price;
                $transaction->status = "true";
                $transaction->users_id = $userdata->id_users;
                $transaction->save();
                
                $cart = new ModelCart();
                $transactionid = ModelTransaction::where('users_id', $userdata->id_users)->where('status', "true")->first();

                $cart->item_id = $item->id_item;
                $cart->transaction_id = $transactionid->id_transaction;
                $cart->quantity = "1";
                $cart->total_item = $item->item_price;
                $cart->save();

                return redirect('/Dashboard/Cart');
            }else{
                if($transactiondata->status == "true"){
                    $transactionid = ModelTransaction::where('users_id', $userdata->id_users)->where('status', "true")->first();
                    $cartdata = ModelCart::join('transaction','transaction.id_transaction','cart.transaction_id')
                                            ->where('transaction.id_transaction', $transactionid->id_transaction)
                                            ->where('cart.item_id', '=', $id)
                                            ->where('status', "true")->get();
                    if(count($cartdata) > 0){
                        $cart = ModelCart::where('id_cart', $cartdata[0]->id_cart)->first();
                        $cart->quantity = $cart->quantity+1;
                        $cart->total_item = ($cart->quantity+1)*$item->item_price;
                        $cart->save();

                        $updateTransaction = ModelTransaction::find($cartdata[0]->id_transaction);
                        $updateTransaction->total = $updateTransaction->total + $cart->total_item;
                        $updateTransaction->save();

                    }else{
                        $cart = new ModelCart();
                        $cart->item_id = $item->id_item;
                        $cart->transaction_id = $transactionid->id_transaction;
                        $cart->quantity = "1";
                        $cart->total_item = $item->item_price;
                        $cart->save();

                        $updateTransaction = ModelTransaction::find($transactionid->id_transaction);
                        $updateTransaction->total = $updateTransaction->total + $item->item_price;
                        $updateTransaction->save();
                    }
                    return redirect('/Dashboard/Cart');
                }else{
                    $transaction = new ModelTransaction();

                    $transaction->total = $item->item_price;
                    $transaction->status = "true";
                    $transaction->users_id = $userdata->id_users;
                    $transaction->save();
                    
                    $cart = new ModelCart();
                    $transactionid = ModelTransaction::where('users_id', $userdata->id_users)->where('status', "true")->first();

                    $cart->item_id = $item->id_item;
                    $cart->transaction_id = $transactionid->id_transaction;
                    $cart->quantity = "1";
                    $cart->total_item = $item->item_price;
                    $cart->save();

                    return redirect('/Dashboard/Cart');
                }
                return redirect('/Dashboard/Cart');
            }
        } else{
            return redirect('/Dashboard');
        }
    }

}
