<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shopkeeper;
use App\Http\Requests\StoreShopkeeperRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateShopkeeperRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ShopkeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        if(Auth::user()->isAdmin()){
            $shopkeepers= Shopkeeper::paginate(5);
        } else {
            $shopkeepers = Shopkeeper::where('user_id', Auth::user()->id)->paginate(5);
        }
        return view('admin.shopkeepers.index', compact('shopkeepers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Shopkeeper $shopkeeper)
    {
        if(Shopkeeper::where('user_id', Auth::user()->id)->exists()) {
            abort(403);
        }
        return view('admin.shopkeepers.create', compact('shopkeeper'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShopkeeperRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopkeeperRequest $request)
    {
    $userId = Auth::id();
    $data = $request->validated();
    $slug = Shopkeeper::generateSlug($request->name);
    $data['slug'] = $slug;
    $data['user_id'] = $userId;
    if($request->hasFile('image')){
        $path = Storage::put('shopkeeper_images', $request->image);
        $data['image'] = $path;
    }
    $new_shopkeeper = Shopkeeper::create($data);
    return redirect()->route('admin.shopkeepers.show', $new_shopkeeper->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopkeeper  $shopkeeper
     *
     */
    public function show(Shopkeeper $shopkeeper)
    {
        if(!Auth::user()->isAdmin() && $shopkeeper->user_id !== Auth::id()){
            abort(403);
        }
        return view('admin.shopkeepers.show', compact('shopkeeper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopkeeper  $shopkeeper
     *
     */
    public function edit(Shopkeeper $shopkeeper)
    {
        if(!Auth::user()->isAdmin() && $shopkeeper->user_id !== Auth::id()){
            abort(403);
        }
        return view('admin.shopkeepers.edit', compact('shopkeeper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShopkeeperRequest  $request
     * @param  \App\Models\Shopkeeper  $shopkeeper
     *
     */
    public function update(UpdateShopkeeperRequest $request, Shopkeeper $shopkeeper)
    {
        if(!Auth::user()->isAdmin() && $shopkeeper->user_id !== Auth::id()){
            abort(403);
        }
        $data = $request->validated();
        $slug = Shopkeeper::generateSlug($request->name);
        $data['slug'] = $slug;
        if($request->hasFile('image')){
            if ($shopkeeper->image) {
                Storage::delete($shopkeeper->image);
            }
            $path = Storage::disk('public')->put('shopkeeper_images', $request->image);
            $data['image'] = $path;
        }
        $shopkeeper->update($data);
        return redirect()->route('admin.shopkeepers.index')->with('message', "$shopkeeper->name updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopkeeper  $shopkeeper
     *
     */
    public function destroy(Shopkeeper $shopkeeper)
    {
        if(!Auth::user()->isAdmin() && $shopkeeper->user_id !== Auth::id()){
            abort(403);
        }
        $shopkeeper->delete();
        return redirect()->route('admin.shopkeepers.index')->with('message', "$shopkeeper->name deleted successfully");
    }
}
