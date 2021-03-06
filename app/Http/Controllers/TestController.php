<?php

namespace App\Http\Controllers;

use App\Test;
use App\Vocab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $r){
        $right_answer = Vocab::find($r->vocab_id, 'name_en');
        $right_answer = $right_answer->name_en;

        $status = Test::where('user_id','like',$r->user_id)->where('vocab_id','like',$r->vocab_id)->pluck('status');
        $status = $status[0];

        // check if they already answer this question yet
        if($status == 'correct' || $status == 'incorrect'){
            Session::flash('done', 'You have already answered this one! Click next to continue..');
        }
        // cek jawaban benar atau salah
        else if($r->answer == $right_answer){
            Test::where('user_id','like',$r->user_id)->where('vocab_id','like',$r->vocab_id)
            ->update(['status'=>'correct']);
            Session::flash('correct', 'Yay, you pick the right word! Click next to continue..');
        }
        else{
            Test::where('user_id','like',$r->user_id)->where('vocab_id','like',$r->vocab_id)
            ->update(['status'=>'incorrect']);
            Session::flash('incorrect', 'Whoops, sorry wrong answer :( You can learn again..');
        }
        
        return redirect()->back();
    }

    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show($category_id)
    {
        $vocabs = Vocab::where('category_id', $category_id)->simplePaginate(1); // kalo mau tulisannya Prev & Next, pake simplePaginate
        $answers = Vocab::all()->where('category_id', $category_id);

        $user_id = Auth()->user()->id;
        $testarray = array();
        foreach($answers as $a){
            $temp = Test::where('user_id','like',$user_id)
            ->where('vocab_id','like', $a->id)->first();
            array_push($testarray, $temp);
        }
        return view('test', compact('vocabs', 'answers','testarray'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
