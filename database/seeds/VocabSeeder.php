<?php

use Illuminate\Database\Seeder;

class VocabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vocabs')->insert([
            ['category_id'=> 1, 'name_id'=> 'Harimau', 'name_en'=> 'Tiger', 'audio'=>'', 'image'=>''],
            ['category_id'=> 1, 'name_id'=> 'Sapi', 'name_en'=> 'Cow', 'audio'=>'', 'image'=>''],
            ['category_id'=> 1, 'name_id'=> 'Kelinci', 'name_en'=> 'Rabbit', 'audio'=>'', 'image'=>''],
            ['category_id'=> 1, 'name_id'=> 'Kucing', 'name_en'=> 'Cat', 'audio'=>'', 'image'=>''],
            ['category_id'=> 1, 'name_id'=> 'Gajah', 'name_en'=> 'Elephant', 'audio'=>'', 'image'=>''],
        ]);

        DB::table('vocabs')->insert([
            ['category_id'=> 2, 'name_id'=> 'Pantai', 'name_en'=> 'Beach', 'audio'=>'', 'image'=>''],
            ['category_id'=> 2, 'name_id'=> 'Taman', 'name_en'=> 'Park', 'audio'=>'', 'image'=>''],
            ['category_id'=> 2, 'name_id'=> 'Restoran', 'name_en'=> 'Restaurant', 'audio'=>'', 'image'=>''],
            ['category_id'=> 2, 'name_id'=> 'Gunung', 'name_en'=> 'Mountain', 'audio'=>'', 'image'=>''],
            ['category_id'=> 2, 'name_id'=> 'Perpustakaan', 'name_en'=> 'Library', 'audio'=>'', 'image'=>''],
        ]);

        DB::table('vocabs')->insert([
            ['category_id'=> 3, 'name_id'=> 'Ruang Tamu', 'name_en'=> 'Living Room', 'audio'=>'', 'image'=>''],
            ['category_id'=> 3, 'name_id'=> 'Dapur', 'name_en'=> 'Cow', 'Kitchen'=>'', 'image'=>''],
            ['category_id'=> 3, 'name_id'=> 'Kamar Tidur', 'name_en'=> 'Bedroom', 'audio'=>'', 'image'=>''],
            ['category_id'=> 3, 'name_id'=> 'Kamar Mandi', 'name_en'=> 'Bathroom', 'audio'=>'', 'image'=>''],
            ['category_id'=> 3, 'name_id'=> 'Garasi', 'name_en'=> 'Garage', 'audio'=>'', 'image'=>''],
        ]);
    }
}
