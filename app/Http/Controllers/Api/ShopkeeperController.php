<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shopkeeper;

class ShopkeeperController extends Controller
{
    public function index()
    {
        $shopkeepers = Shopkeeper::with('types')->get();
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
                'results' => 'nessun negozio'
            ]);
    }

    public function filterRestaurants(Request $request)
    {
        $type_id = $request->input('type_id', []);
        $shopkeepers = Shopkeeper::where(function ($query) use ($type_id) {
            foreach ($type_id as $type_id) {
                $query->orWhereHas('types', function ($subquery) use ($type_id) {
                    $subquery->where('type_id', $type_id);
                }
                );
            }
        })->get();
        if ($shopkeepers->isEmpty()) {
            return response()->json([
                'success' => false,
                'results' => 'Non trovato'
            ]);
        }

        return response()->json([
            'success' => true,
            'results' => '$shopkeepers'
        ]);
    }


}