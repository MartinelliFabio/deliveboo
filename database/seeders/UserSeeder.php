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

        $users = config('dataseeder.shopkeepers');
        foreach($users as $key => $user){
            $new_user = new User();
            $new_user->name = $user['name_user'];
            $new_user->email = $user['email'];
            $new_user->password = bcrypt($user['password']);
            $new_user->is_admin = false;
            $new_user->save();
        }

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
