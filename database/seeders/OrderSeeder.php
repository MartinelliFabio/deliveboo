<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = config('dataseeder.orders');
        foreach ($orders as $order) {
            $order = new Order();
            $order->nr_ord = $order['nr_ord'];
            $order->slug =Str::slug($order->nr_ord, '-');
            $order->price_tot = $order['price_tot'];
            $order->email = $order['email'];
            $order->address = $order['address'];
            $order->phone = $order['phone'];
            $order->name = $order['name'];
            $order->surname = $order['surname'];
            $order->status = $order['status'];
            $order->datetime = $order['datetime'];
            $order->save();
        }
    }
}
