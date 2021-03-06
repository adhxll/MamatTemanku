<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Vocab;
use App\User;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vocabs = Vocab::all();
        $users = User::all();

        foreach($users as $u){
            foreach($vocabs as $v){
                DB::table('tests')->insert([
                    ['user_id'=> $u->id,
                    'vocab_id' => $v->id,
                    'status'=>'none']
                ]);
            }
        }
    }
}
