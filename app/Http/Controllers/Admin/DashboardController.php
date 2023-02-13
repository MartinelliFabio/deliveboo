<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shopkeeper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    // public function index(){
    //     return view('admin.dashboard');
    // }
    public function index(){
        if (Auth::user()->is_admin) {
            $products = Shopkeeper::all();
            return view('admin.dashboard', compact('products'));
        } else {
            $shopkeeper = Shopkeeper::where('user_id', Auth::user()->id)->first(); 
            if ($shopkeeper) {
                return view('admin.shopkeepers.index', compact('shopkeeper'));
            } else {
                return redirect()->route('admin.shopkeepers.create');
            }
        }
    }
}