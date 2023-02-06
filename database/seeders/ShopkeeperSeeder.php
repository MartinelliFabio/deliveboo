<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Shopkeeper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ShopkeeperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $shopkeepers = config('dataseeder.shopkeepers');
        foreach($shopkeepers as $key => $shopkeeper) {
            $new_shopkeeper = new Shopkeeper();
            $new_shopkeeper->name = $shopkeeper['name'];
            $new_shopkeeper->slug = Str::slug($new_shopkeeper->name, '-');
            $new_shopkeeper->p_iva = $shopkeeper['p_iva'];
            $new_shopkeeper->image = $shopkeeper['image'];
            $new_shopkeeper->address = $shopkeeper['address'];
            $new_shopkeeper->hour = $shopkeeper['hour'];
            $new_shopkeeper->user_id = $key + 1;
            $new_shopkeeper->save();
        }
    }
}
