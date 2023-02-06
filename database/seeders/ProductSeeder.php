<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $products = config('dataseeder.products');
        foreach ($products as $product) {
            foreach ($product['shopkeeper_id'] as $shopkeeper) {
                $new_product = new Product();
                $new_product->name = $product['name'];
                $new_product->slug = SlugService::createSlug(Product::class, 'slug', $new_product);
                $new_product->available = $faker->boolean();
                $new_product->image = $product['image'];
                $new_product->ingredient = $product['ingredient'];
                $new_product->price = $product['price'];
                $new_product->shopkeeper_id = $shopkeeper;
                $new_product->save();
            }
        }
    }
}
