<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user = new User();
        $user->name = 'team6';
        $user->email = 'team6@deliveboo.it';
        $user->password = bcrypt('team6');
        $user->is_admin = true;
        $user->save();
        //utenti creati con faker.
        // for ($i = 0; $i < 10; $i++) {
        //     $user = new User;
        //     $user->name = $faker->name();
        //     $user->email = $faker->email();
        //     $user->password = bcrypt('team6');
        //     $user->is_admin = false;
        //     $user->save();
        // }
    }
}
