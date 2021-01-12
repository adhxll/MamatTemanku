<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['name'=> 'adhella',
            'email' => 'adhella@gmail.com',
            'password'=> Hash::make('adhella123'),
            ],
            ['name'=> 'mietha',
            'email' => 'mietha@gmail.com',
            'password'=> Hash::make('mietha123'),
            ],
            ['name'=> 'theresia',
            'email' => 'theresia@gmail.com',
            'password'=> Hash::make('theresia123'),
            ],

        ]);
    }
}
