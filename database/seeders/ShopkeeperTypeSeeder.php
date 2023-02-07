<?php

namespace Database\Seeders;

use App\Models\Shopkeeper;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopkeeperTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shopkeepers = config('dataseeder.shopkeepers');
        // dd($shopkeepers);
        foreach($shopkeepers as $shopkeeper) {
            foreach ($shopkeeper['type_id'] as $type)
                DB::table('shopkeeper_type')->insert([
                    'shopkeeper_id' => Shopkeeper::where('name', $shopkeeper['name'])->first()->id,
                    'type_id' => $type,
                ]);
        }
    }
}
