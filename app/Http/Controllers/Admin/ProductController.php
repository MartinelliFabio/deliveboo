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
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;


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
            if(!Shopkeeper::where('user_id', Auth::user()->id)->exists()) {
                abort(403);
            } else {
                $shopkeeper = Shopkeeper::where('user_id', Auth::user()->id)->first();
                $products = Product::where('shopkeeper_id', $shopkeeper->id)->paginate(5);
            }
        }
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->isAdmin()){
            abort(403);
        }
        if(!Shopkeeper::where('user_id', Auth::user()->id)->exists()) {
            abort(403);
        }
        $product = Product::all();
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

        $shopkeeper = Shopkeeper::where('user_id', Auth::user()->id)->first();
        $shopkeeper_id = $shopkeeper->id;
        $data['shopkeeper_id'] = $shopkeeper_id;

        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
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
        if (Auth::user()->isAdmin()){
            return view('admin.products.show', compact('product'));
        }
        if(!Shopkeeper::where('user_id', Auth::user()->id)->exists()) {
            abort(403);
        }
        $shopkeeper_id = Shopkeeper::where('user_id', Auth::user()->id)->first()->id;
        if($product->shopkeeper_id !== $shopkeeper_id){
            abort(403);
        }
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
        if (Auth::user()->isAdmin()) {
            abort(403);
        }
        $shopkeeper_id = Shopkeeper::where('user_id', Auth::user()->id)->first()->id;
        if ($product->shopkeeper_id !== $shopkeeper_id) {
            abort(403);
        }
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

        return redirect()->route('admin.products.index')->with('message', "$updated aggirnato con successo!");
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
        return redirect()->route('admin.products.index')->with('message', "$product->name cancellato con successo!");
    }

    public function archive() 
    {
        if (Auth::user()->isAdmin()) {
            $products = Product::paginate(10);
        }else{
            if(!Shopkeeper::where('user_id', Auth::user()->id)->exists()) {
                abort(403);
            } else {
                $shopkeeper = Shopkeeper::where('user_id', Auth::user()->id)->first();
                $products = Product::where('shopkeeper_id', $shopkeeper->id)->onlyTrashed()->get();
            }
        }
        return view('admin.products.archive', compact('products'));

    }

    // public function trashedDelete($id)
    // {
    //     $product = Product::onlyTrashed()->findOrFail($id);
    //     $product->forceDelete();

    //     return redirect()->route('admin.products.index')->with('message', "$product->name eliminato con successo!");
    // }

    public function trashedRestored($id)
    {
        $product = Product::onlyTrashed()->findOrFail($id);
        $product->restore();

        return redirect()->route('admin.products.index')->with('message', "$product->name ripristinato con successo!");
    }
}
