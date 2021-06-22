<?php

namespace App\Http\Controllers;
use App\evening;

use App\energy;
use App\foodlist;
use App\morning;
use Illuminate\Http\Request;

class EveningController extends Controller
{
    //
    public function evening(Request $request)
    {

        $l = $request->session()->get('gender');
        $h=$request->session()->get('email');


        $value = foodlist::where([
            ['category', '=', 'evening']
        ])->get();


        return view("user.eveningform", compact('value','l','h'));    }

    public function sondha(Request $request)
    {
        $i = $request->input("zzz");
        $l = $request->session()->get('gender');
        $h=$request->session()->get('email');


        $k = foodlist::where([
            ['id', '=', $i]
        ])->get();
        foreach ($k as $n) {
            $foodname = $n['foodname'];
            $image = $n['image'];
            $energy = $n['energy'];

        }


        $k = energy::where([
            ['foodid', '=', $i]
        ])->get();
        foreach ($k as $n) {
            $protein = $n['protein'];
            $carbohydrate = $n['carbohydrate'];
            $fat = $n['fat'];
            $sugar = $n['sugar'];


        }


        $val = new evening();

        $val->username = $h;
        $val->usertype = $l;
        $val->foodname = $foodname;
        $val->foodimage = $image;

        $val->date = $request->input("date");
        $val->time = $request->input("time");


        $val->energy = $energy;

        $val->protein = $protein;
        $val->carbohydrate = $carbohydrate;
        $val->fat = $fat;
        $val->sugar = $sugar;

        $val->save();


        $value = evening::where([
            ['username', '=', $h]])->get();

        return view('user.tablemorning',compact('value','l','h'));


    }

}

