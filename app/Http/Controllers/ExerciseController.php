<?php

namespace App\Http\Controllers;
use App\exercise;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{


    public function createexe()
    {
        return view('user.exercise');
    }

    public function exstore(Request $request)
    {
        $exe=new exercise();
        $exe->date=$request->input("date");
        $exe->exname=$request->input("exname");
        $exe->exhour=$request->input("exhour");
        $exe->weight=$request->input("weight");
        $exe->height=$request->input("height");
        $exe->inch=$request->input("inch");


        $exe->save();

        return redirect('/hh');



    }


    public function exr()
    {
        $da= date("Y-m-d");

        $k= exercise::where([
            ['date', '=', $da]
        ])->get();

        /*foreach ($k as $n) {
            $weight= $n['weight'];
            $exhour = $n['exhour'];}

        $val = new exercise();

        $val->weight = $weight;
        $val->exhour = $exhour;

        */


        $d =0.0254;
        $t=0;
        $m=0;
        $p=0;
        $j=0;
        return view("user.extable", compact('d','t','k','m','p','j'));

    }





}
