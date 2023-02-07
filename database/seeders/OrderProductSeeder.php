<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $products = Product::all();

        // foreach($products as $product) {
        //     $product->orders()->attach('$order_id');
        //     $new_shopkeeper->name = $shopkeeper['name'];
        //     $new_shopkeeper->slug = Str::slug($new_shopkeeper->name, '-');
        //     $new_shopkeeper->p_iva = $shopkeeper['p_iva'];
        //     $new_shopkeeper->image = $shopkeeper['image'];
        //     $new_shopkeeper->address = $shopkeeper['address'];
        //     $new_shopkeeper->hour = $shopkeeper['hour'];
        //     // $new_shopkeeper->user_id = $key + 1;
        //     $new_shopkeeper->user_id = $shopkeeper['user_id'];
        //     $new_shopkeeper->save();
        // }
    }
}
