<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shopkeeper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    // public function index(){
    //     if (Auth::user()->is_admin) {
    //         $products = Shopkeeper::all();
    //         return view('admin.dashboard', compact('products'));
    //     }else{
    //         $shopkeeper = Shopkeeper::find(Auth::user()->id);
    //         return view('admin.dashboard', compact('shopkeeper'));
    //     }
    // }
}