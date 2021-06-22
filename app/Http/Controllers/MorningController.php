<?php

namespace App\Http\Controllers;

use App\energy;
use App\morning;
use App\noon;
use App\evening;
use App\dinner;
use App\foodlist;
use App\uregistration;
use Illuminate\Http\Request;
use Charts;
use DB;

class MorningController extends Controller
{
    //
    public function store(Request $request)
    {
        $l = $request->session()->get('gender');
        $h = $request->session()->get('email');


        $value = foodlist::where([
            ['category', '=', 'morning']
        ])->get();


        return view("user.morningform", compact('value', 'l', 'h'));
    }

    public function sokal(Request $request)
    {
        $i = $request->input("abc");
        $l = $request->session()->get('gender');
        $h = $request->session()->get('email');


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


        $val = new morning();

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
        //$ss = $request->input('email');

        $value = morning::where([
            ['username', '=', $h]])->get();

        return view('user.tablemorning', compact('value', 'l', 'h'));

    }

    public function enr()
    {
        $val = date("Y-m-d");


        $k = morning::where([
            ['date', '=', $val]

        ])->get();

        $i = noon::where([
            ['date', '=', $val]
        ])->get();

        $a = evening::where([
            ['date', '=', $val]
        ])->get();

        $b = dinner::where([
            ['date', '=', $val]
        ])->get();
        $calom = morning::all();

            $q = 0;
        $w = 0;
        $r = 0;
        $t = 0;
        $g = 0;
        $value = morning::all();
        foreach ($value as $val){
            $q=$q+(double)$val['energy'];
            $w=$w+(double)$val['protein'];
            $r=$r+(double)$val['carbohydrate'];
            $t=$t+(double)$val['fat'];
            $g=$g+(double)$val['sugar'];

        }

        $chart=Charts::create('line', 'highcharts')
            ->title('Morining Chart')
            ->elementLabel('Morining Chart')
            ->labels(['Enegry', 'Protin', 'Carbohydrate','Fat','Salt'])
            ->values([$q,$w,$r,$t,$g])
            ->dimensions(1000,500)
            ->responsive(false);



        $q = 0;
        $w = 0;
        $r = 0;
        $t = 0;
        $g = 0;
        $value = noon::all();
        foreach ($value as $val){
            $q=$q+(double)$val['energy'];
            $w=$w+(double)$val['protein'];
            $r=$r+(double)$val['carbohydrate'];
            $t=$t+(double)$val['fat'];
            $g=$g+(double)$val['sugar'];

        }

        $chart1=Charts::create('line', 'highcharts')
            ->title('Launch Chart')
            ->elementLabel('Launch Chart')
            ->labels(['Enegry', 'Protin', 'Carbohydrate','Fat','Salt'])
            ->values([$q,$w,$r,$t,$g])
            ->dimensions(1000,500)
            ->responsive(false);



        $q = 0;
        $w = 0;
        $r = 0;
        $t = 0;
        $g = 0;
        $value = evening::all();
        foreach ($value as $val){
            $q=$q+(double)$val['energy'];
            $w=$w+(double)$val['protein'];
            $r=$r+(double)$val['carbohydrate'];
            $t=$t+(double)$val['fat'];
            $g=$g+(double)$val['sugar'];

        }

        $chart2=Charts::create('line', 'highcharts')
            ->title('Evening Chart')
            ->elementLabel('Evening Chart')
            ->labels(['Enegry', 'Protin', 'Carbohydrate','Fat','Salt'])
            ->values([$q,$w,$r,$t,$g])
            ->dimensions(1000,500)
            ->responsive(false);



        $q = 0;
        $w = 0;
        $r = 0;
        $t = 0;
        $g = 0;
        $value = dinner::all();
        foreach ($value as $val){
            $q=$q+(double)$val['energy'];
            $w=$w+(double)$val['protein'];
            $r=$r+(double)$val['carbohydrate'];
            $t=$t+(double)$val['fat'];
            $g=$g+(double)$val['sugar'];

        }

        $chart3=Charts::create('line', 'highcharts')
            ->title('Dinner Chart')
            ->elementLabel('Dinner Chart')
            ->labels(['Enegry', 'Protin', 'Carbohydrate','Fat','Salt'])
            ->values([$q,$w,$r,$t,$g])
            ->dimensions(1000,500)
            ->responsive(false);


        $q = 0;
        $w = 0;
        $r = 0;
        $t = 0;
        $g = 0;

        return view('user.totalcalory', compact('k', 'i', 'a', 'b', 'q', 'w', 'r', 't', 'g','chart','chart1','chart2','chart3'));


    }
}
