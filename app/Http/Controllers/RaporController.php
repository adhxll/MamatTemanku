<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Test;
use App\Category;
use App\Vocab;

class RaporController extends Controller
{
    public function show(){
        $categories = Category::all();
        $user_id = Auth::user()->id;
        $data = array();
        foreach($categories as $c){
            $correct = 0;
            $wrong = 0;
            //kumpulin vocab yang ada di satu category
            $vocabs = Vocab::where('category_id', 'like', $c->id);
            foreach($vocabs as $v){
                //cari status tiap vocab yang si user udah kerjain di test
                $temp = Test::where('vocab_id','like',$v->id)
                ->where('user_id','like',$user_id)->first();

                //hitung banyak benar dan salah
                if($temp->status == 'correct'){
                    $correct++;
                }else if($temp->status == 'incorrect'){
                    $wrong++;
                }
            }

            if($correct+$wrong < $vocabs->count()){
                array_push($data, [$c, 0, 0]);
            }
            else{
                array_push($data, [$c, $correct, $wrong]);
            }

        }

        //return 2D array category dengan tiap count benar atau salah
        //data[i][0] isinya row category
        //data[i][1] isinya jumlah correct
        //data[i][2] isinya jumlah wrong
        return view('rapor', ['data'=>$data]);
    }

    public function detail($category_id){

    }
}
