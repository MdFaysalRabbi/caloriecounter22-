<?php

namespace App\Http\Controllers;

use App\foodlist;
use Illuminate\Http\Request;
use Image;

class FoodlistController extends Controller
{
    //
    public function create()
    {
        return view('user.forms');
    }

    public function store(Request $request)
    {
       /* $this->validate($request,[
          'categoy'=>'required',
            'foodname'=>'required',
            'image'=>'nullable|image',
            'energy'=>'required',
        ]);*/
        $image=new foodlist();
        $image->category=$request->input("category");
        $image->foodname=$request->input("foodname");
       /* $image->image=$request->input("image");*/
        $image->energy=$request->input("energy");
        if($request ->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'1.'.$extension;
            $file ->move('uploads/',$filename);
            $image->image=$filename;
        }

        $image->save();
        if($request->input("category")=='morning')
        {
            return redirect('/bb');
        }
        else if($request->input("category")=='noon')
        {
            return redirect('/bb1');
        }
       else if($request->input("category")=='evening')
        {
            return redirect('/bb2');
        }
       else if($request->input("category")=='dinner')
       {
           return redirect('/bb3');
       }

       else
       {
           return direct('/bb3');
       }




    }
    public function viewfood()

    {
        $value= foodlist::where([
            ['category','=','morning']
        ])->get();
        //return view("user.tables",compact('value'));



       // return view("user.tables",compact('value'));




        return view("user.tables",compact('value'));


    }

    public function viewfood1()

    {
        $value = foodlist::where([
            ['category', '=', 'noon']
        ])->get();
        return view("user.tables", compact('value'));
    }

    public function viewfood2()

    {
        $value= foodlist::where([
            ['category', '=', 'evening']
        ])->get();
        return view("user.tables", compact('value'));
    }
    public function viewfood3()

    {
        $value= foodlist::where([
            ['category', '=', 'dinner']
        ])->get();
        return view("user.tables", compact('value'));
    }











}
