<?php

namespace App\Http\Controllers;
use App\regis;


use Illuminate\Http\Request;



class RegisController extends Controller
{
    //
    public function show()
    {
        return view('user.register');
    }

    public function return()
    {
        return view('user.adminlogin');
    }

    public function save(Request $request)
    {

        $reg = new regis();
        $reg->name = $request->input("name");
        $reg->email = $request->input("email");
        $reg->password = $request->input("password");


        $reg->save();

        return redirect('/return');


    }

    public function index(Request $request)
    {
        $c = 0;
        $email = $request->input('email');
        $pass = $request->input('password');

        $details = regis::where('email', $email)->get();

        foreach ($details as $value) {
            if ($email == $value['email'] && $pass == $value['password']) {
                $request->session()->put('email', $email);
                $request->session()->put('password', $pass);
                $request->session()->put('id', $value['id']);


                return redirect("/aa");

            }
        }
        if ($c == 0) {
            $request->session()->put('email', $email);
            $request->session()->put('password', $pass);
            $request->session()->put('id', $c);

            return view('user.adminlogin');


        }
    }

    public function logout(Request $request){
        $request->session()->flush();

        return redirect("/return");
    }



}
