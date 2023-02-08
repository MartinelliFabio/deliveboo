<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Shopkeeper;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            $orders = Order::paginate(10);
        }
        $shopkeeper = Shopkeeper::where('user_id', Auth::user()->id)->first();
        $shopkeeper_id = $shopkeeper->id;
        $orders = Order::whereHas('products', function ($query) use ($shopkeeper_id) {
            $query->where('shopkeeper_id', $shopkeeper_id);
        })->orderBy('datetime')->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('message', "Numero ordine $order->nr_ord cancellato con successo!");
    }

    public function archive() 
    {
        $orders = Order::onlyTrashed()->get();
        return view('admin.orders.archive', compact('orders'));
    }


    // public function trashedDelete($id)
    // {
    //     $order = Order::onlyTrashed()->findOrFail($id);
    //     $order->forceDelete();

    //     return redirect()->route('admin.orders.index')->with('message', "$order->nr_ord eliminato con successo!");
    // }

    public function trashedRestored($id)
    {
        $order = Order::onlyTrashed()->findOrFail($id);
        $order->restore();

        return redirect()->route('admin.orders.index')->with('message', "$order->nr_ord ripristinato con successo!");
    }
}
