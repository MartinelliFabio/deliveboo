<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function purchase(Request $request){
        $new_order = new Order();
        $today = date("Ymd");
        $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
        $code = $today . $rand;
        $new_order->nr_ord = $code;
        $new_order->name = $request->name;
        $new_order->address = $request->address;
        $new_order->email = $request->email;
        $new_order->phone = $request->phone;
        $new_order->date = today();
        $new_order->price_tot = $request->priceTot;
        $new_order->payment_status = $request->paymentStatus == 'true';
        $new_order->save();

        $list_item = [];
        foreach($request->cart as $item){
            $key = $item['id'];
            $quantity = $item['quantity'];
            $price = $item['price'];
            $list_item[$key] = ['quantity' => $quantity , 'current_price' => $price];
        }
        $new_order->products()->attach($list_item);

        return response()->json([
            'results' => $request->all(),
            'order' => $new_order
        ]);
    }
}
