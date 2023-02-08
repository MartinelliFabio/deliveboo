<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shopkeeper;

class ShopkeeperController extends Controller
{
    public function index()
    {
        $shopkeepers = Shopkeeper::all();
        return response()->json([
            'success' => true,
            'results' => $shopkeepers
        ]);
    }

    public function show($slug)
    {
        $shopkeeper = Shopkeeper::with('products')->where('slug', $slug)->first();
        
        if ($shopkeeper) {
            return response()->json([
                'success' => true,
                'results' => $shopkeeper
            ]);
        } else
            return response()->json([
                'success' => false,
                'results' => 'no shopkeeper'
            ]);
    }
}
