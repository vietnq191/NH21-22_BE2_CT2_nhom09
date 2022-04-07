<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProtypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('protypes')->insert([
            'name'=>'Fresh Meat',
        ]);
        DB::table('protypes')->insert([
            'name'=>'Vegetables',
        ]);
        DB::table('protypes')->insert([
            'name'=>'Ocean Foods',
        ]);
        DB::table('protypes')->insert([
            'name'=>'Eggs',
        ]);
        DB::table('protypes')->insert([
            'name'=>'Milk',
        ]);
        DB::table('protypes')->insert([
            'name'=>'Drinks',
        ]);
        DB::table('protypes')->insert([
            'name'=>'Beers',
        ]);
        DB::table('protypes')->insert([
            'name'=>'Fresh Fruit',
        ]);
        DB::table('protypes')->insert([
            'name'=>'Dried Fruit',
        ]);
        DB::table('protypes')->insert([
            'name'=>'Canned Foods',
        ]);
    }
}
