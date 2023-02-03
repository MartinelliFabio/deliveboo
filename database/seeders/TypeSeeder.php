<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = config('dataseeder.types');
        foreach ($types as $type) {
            $type = new Type();
            $type->name = $type['name'];
            $type->slug =Str::slug($type->name, '-');
            $type->save();
        }
    }
}
