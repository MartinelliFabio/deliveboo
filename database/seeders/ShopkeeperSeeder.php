<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Shopkeeper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ShopkeeperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shopkeepers = config('dataseeder.shopkeepers');
        foreach($shopkeepers as $shopkeeper) {
            $shopkeeper = new Shopkeeper();
            $shopkeeper->name = $shopkeeper['name'];
            $shopkeeper->slug =Str::slug($shopkeeper->name, '-');
            $shopkeeper->p_iva = $shopkeeper['p_iva'];
            $shopkeeper->image = ShopkeeperSeeder::storeImage($shopkeeper['image']);
            $shopkeeper->address = $shopkeeper['address'];
            $shopkeeper->hour = $shopkeeper['hour'];
            $shopkeeper->user_id = $shopkeeper['user_id'];
            $shopkeeper->save();
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
