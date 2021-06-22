<?php

namespace App\Http\Controllers;

use App\energy;
use App\foodlist;
use Illuminate\Http\Request;

class EnergyController extends Controller
{
    //
    public function energystore(Request $request)
    {
         $calory=new energy();
         $value=new foodlist();


             $calory->protein=$request->input("protein");
             $calory->carbohydrate=$request->input("carbohydrate");
             $calory->fat=$request->input("fat");
             $calory->sugar=$request->input("sugar");
             $calory->foodid=$request->input("foodid");

             $calory->save();

             $value=energy::all();
             return view('user.energy',compact('value'));

     }



    public function showenergy($id)
    {
        return view('user.caloryform',compact('id'));
    }


}
