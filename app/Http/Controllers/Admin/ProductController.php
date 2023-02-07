<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Order;
use App\Models\Shopkeeper;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            $products = Product::paginate(10);
        }else{
            // $shopkeeper = Shopkeeper::find(Auth::user()->id);
            // $userId = $shopkeeper->id;
            // $products = Product::where('shopkeeper_id', $userId)->paginate(10);
            $shopkeeper = Shopkeeper::where('user_id', Auth::user()->id)->first();
            $products = Product::where('shopkeeper_id', $shopkeeper->id)->paginate(5);
            // dd($shopkeeper);
            // return view('admin.products.index', compact('products'));
        }
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('admin.products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        $slug = Str::slug($request->name);
        $data['slug'] = $slug;
        if($request->hasFile('image')) {
            $path = Storage::put('products_images', $request->image);
            $data['image'] = $path;
        }
        $new_product = Product::create($data);

        return redirect()->route('admin.products.show', $new_product->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $slug = Str::slug($request->name);
        $data['slug'] = $slug;
        if($request->hasFile('image')){
            if ($product->image) {
                Storage::delete($product->image);
            }

            $path = Storage::put('products_images', $request->image);
            $data['image'] = $path;
        }
        $updated = $product->name;
        $product->update($data);

        return redirect()->route('admin.products.index')->with('message', "$updated updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('message', "$product->name deleted successfully");
    }
}
