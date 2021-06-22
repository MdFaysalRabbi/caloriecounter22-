<?php

namespace App\Http\Controllers;

use App\uregistration;
use App\userregistration;
use Illuminate\Http\Request;

class UregistrationController extends Controller
{
    //
    public function usershow()
    {
        return view('user.userform');
    }

    public function returnuser()
    {
        return view('user.login');
    }

    public function saveuser(Request $request)
    {

        $reg = new uregistration();
        $reg->name = $request->input("name");
        $reg->email = $request->input("email");
        $reg->password = $request->input("password");
        $reg->gender = $request->input("gender");


        $reg->save();

        return view('user.login');


    }

    public function index(Request $request)
    {
        $c = 0;
        $email = $request->input('email');
        $pass = $request->input('password');

        $details = uregistration::where('email', $email)->get();

        foreach ($details as $value) {
            if ($email == $value['email'] && $pass == $value['password']) {
                $request->session()->put('email', $email);
                $request->session()->put('password', $pass);
                $request->session()->put('gender', $value['gender']);


                return redirect('/vv');

            }
        }
        if ($c == 0) {
            $request->session()->put('email', $email);
            $request->session()->put('password', $pass);
            $request->session()->put('id', $c);

            return view('user.login');

        }
    }

    public function logout(Request $request){
        $request->session()->flush();

        return redirect("/ff");
    }
}
