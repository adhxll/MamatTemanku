<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ['name'=> 'Animals', 'image'=>'Animals.jpg'],
            ['name'=> 'Places', 'image'=>'Places.png'],
            ['name'=> 'House', 'image'=>'House.png']
        ]);
    }
}
