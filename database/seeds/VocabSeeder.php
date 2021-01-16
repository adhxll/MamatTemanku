<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['category_id'=> 1, 'name_id'=> 'Harimau', 'name_en'=> 'Tiger', 'audio_en'=>'tiger.aac', 'audio_id'=>'harimau.aac', 'image'=>'tiger.png'],
            ['category_id'=> 1, 'name_id'=> 'Sapi', 'name_en'=> 'Cow', 'audio_en'=>'cow.aac', 'audio_id'=>'sapi.aac', 'image'=>'cow.png'],
            ['category_id'=> 1, 'name_id'=> 'Kelinci', 'name_en'=> 'Rabbit', 'audio_en'=>'rabbit.aac', 'audio_id'=>'kelinci.aac', 'image'=>'rabbit.png'],
            ['category_id'=> 1, 'name_id'=> 'Kucing', 'name_en'=> 'Cat', 'audio_en'=>'cat.aac', 'audio_id'=>'kucing.aac', 'image'=>'cat.png'],
            ['category_id'=> 1, 'name_id'=> 'Gajah', 'name_en'=> 'Elephant', 'audio_en'=>'elephant.aac', 'audio_id'=>'gajah.aac', 'image'=>'elephant.png'],
        ]);

        DB::table('vocabs')->insert([
            ['category_id'=> 2, 'name_id'=> 'Pantai', 'name_en'=> 'Beach', 'audio_en'=>'beach.aac', 'audio_id'=>'pantai.aac', 'image'=>'beach.jpg'],
            ['category_id'=> 2, 'name_id'=> 'Taman', 'name_en'=> 'Park', 'audio_en'=>'park.aac', 'audio_id'=>'taman.aac', 'image'=>'park.jpg'],
            ['category_id'=> 2, 'name_id'=> 'Restoran', 'name_en'=> 'Restaurant', 'audio_en'=>'restaurant.aac', 'audio_id'=>'restoran.aac', 'image'=>'restaurant.jpg'],
            ['category_id'=> 2, 'name_id'=> 'Gunung', 'name_en'=> 'Mountain', 'audio_en'=>'mountain.aac', 'audio_id'=>'gunung.aac', 'image'=>'mountain.webp'],
            ['category_id'=> 2, 'name_id'=> 'Perpustakaan', 'name_en'=> 'Library', 'audio_en'=>'library.aac', 'audio_id'=>'perpustakaan.aac', 'image'=>'library.jpg'],
        ]);

        DB::table('vocabs')->insert([
            ['category_id'=> 3, 'name_id'=> 'Ruang Tamu', 'name_en'=> 'Living Room', 'audio_en'=>'livingroom.aac', 'audio_id'=>'ruangtamu.aac', 'image'=>'livingroom.png'],
            ['category_id'=> 3, 'name_id'=> 'Dapur', 'name_en'=> 'Kitchen', 'audio_en'=>'kitchen.aac', 'audio_id'=>'dapur.aac', 'image'=>'kitchen.jpg'],
            ['category_id'=> 3, 'name_id'=> 'Kamar Tidur', 'name_en'=> 'Bedroom', 'audio_en'=>'bedroom.aac', 'audio_id'=>'kamartidur.aac', 'image'=>'bedroom.jpg'],
            ['category_id'=> 3, 'name_id'=> 'Kamar Mandi', 'name_en'=> 'Bathroom', 'audio_en'=>'bathroom.aac', 'audio_id'=>'kamarmandi.aac', 'image'=>'bathroom.jpg'],
            ['category_id'=> 3, 'name_id'=> 'Garasi', 'name_en'=> 'Garage', 'audio_en'=>'garage.aac', 'audio_id'=>'garasi.aac', 'image'=>'garage.jpg'],
        ]);
    }
}
