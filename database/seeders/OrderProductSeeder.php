<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $orders = Order::all();
        $products = Product::where('shopkeeper_id', 1)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
        $products = Product::where('shopkeeper_id', 2)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
        $products = Product::where('shopkeeper_id', 3)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
        $products = Product::where('shopkeeper_id', 4)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
        $products = Product::where('shopkeeper_id', 5)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
        $products = Product::where('shopkeeper_id', 6)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
        $products = Product::where('shopkeeper_id', 7)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
        $products = Product::where('shopkeeper_id', 8)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
        $products = Product::where('shopkeeper_id', 9)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
        $products = Product::where('shopkeeper_id', 10)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
        $products = Product::where('shopkeeper_id', 11)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
        $products = Product::where('shopkeeper_id', 12)->get();
        foreach($orders as $order) {
            foreach($products as $product) {
                DB::table('order_product')->insert([
                    'product_id' => $product->id,
                    'order_id' => $order->id,
                    'quantity' => $faker->randomDigit(),
                    'price' => $product->price
                ]);
            }
        }
    }
}
 