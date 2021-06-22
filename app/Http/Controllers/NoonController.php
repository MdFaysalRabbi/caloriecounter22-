<?php

namespace App\Http\Controllers;
use App\morning;
use App\noon;
use App\energy;

use App\foodlist;
use Illuminate\Http\Request;

class NoonController extends Controller
{
    //
    public function noon(Request $request)
    {

        $l = $request->session()->get('gender');
        $h=$request->session()->get('email');


        $value = foodlist::where([
            ['category', '=', 'noon']
        ])->get();


        return view("user.noonform", compact('value','l','h'));


    }

    public function dupur(Request $request)
    {
        $i= $request->input("xyz");
        $l= $request->session()->get('gender');
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


        $val = new noon();

        $val->username =$h;
        $val->usertype =$l;
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


        $value = noon::where([
            ['username', '=', $h]])->get();

        return view('user.tablemorning',compact('value','l','h'));

    }}
