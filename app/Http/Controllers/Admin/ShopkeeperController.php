<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shopkeeper;
use App\Http\Requests\StoreShopkeeperRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateShopkeeperRequest;

class ShopkeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shopkeepers= Shopkeeper::all();
        return view('admin.shopkeepers.index', compact('shopkeepers'));
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
     * @param  \App\Http\Requests\StoreShopkeeperRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopkeeperRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopkeeper  $shopkeeper
     * @return \Illuminate\Http\Response
     */
    public function show(Shopkeeper $shopkeeper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopkeeper  $shopkeeper
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopkeeper $shopkeeper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShopkeeperRequest  $request
     * @param  \App\Models\Shopkeeper  $shopkeeper
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopkeeperRequest $request, Shopkeeper $shopkeeper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopkeeper  $shopkeeper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopkeeper $shopkeeper)
    {
        //
    }
}
