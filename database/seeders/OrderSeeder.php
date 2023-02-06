<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $orders = config('dataseeder.orders');
        foreach ($orders as $order) {
            $new_order = new Order();
            $new_order->nr_ord = $order['nr_ord'];
            $new_order->slug =Str::slug($new_order->nr_ord, '-');
            $new_order->price_tot = $order['price_tot'];
            $new_order->email = $faker->safeEmail();
            $new_order->address = $order['address'];
            $new_order->phone = $faker->phoneNumber();
            $new_order->name = $faker->firstName($gender = null);
            $new_order->surname = $faker->lastName();
            $new_order->status = $order['status'];
            $new_order->datetime = $faker->time();
            $new_order->save();
        }
    }
}
