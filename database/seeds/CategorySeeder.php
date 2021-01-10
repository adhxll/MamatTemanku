<?php

use Illuminate\Database\Seeder;

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
            ['name'=> 'Animals', 'image'=>''],
            ['name'=> 'Places', 'image'=>''],
            ['name'=> 'House', 'image'=>'']
        ]);
    }
}
