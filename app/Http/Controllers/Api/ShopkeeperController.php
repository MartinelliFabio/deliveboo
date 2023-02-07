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
        $shopkeepers = Shopkeeper::all();

        if ($shopkeepers) {
            return response()->json([
                'success' => true,
                'results' => $shopkeepers
            ]);
        } else
            return response()->json([
                'success' => true,
                'results' => 'no project'
            ]);
    }
}
