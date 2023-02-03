<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('dataseeder.products');
        foreach ($products as $product) {
            $product = new Product();
            $product->name = $product['name'];
            $product->slug = Product::create(['name' => request('name')]);
            $product->available = $product['available'];
            $product->image = productSeeder::storeImage($product['image']);
            $product->ingredient = $product['ingredient'];
            $product->price = $product['price'];
            $product->shopkeeper_id = $product['shopkeeper_id'];
            $product->save();
        }
    }
    public static function storeimage($img){
        $url = 'https:'.$img;
        $contents = file_get_contents($url);
        $temp_name = substr($url, strrpos($url, '/') + 1);
        $name = substr($temp_name, 0, strpos($temp_name, '?')) .'.jpg';
        $path = 'images/' . $name;
        Storage::put('images/'.$name, $contents);
        return $path;
    }
}
