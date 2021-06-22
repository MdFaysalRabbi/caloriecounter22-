<?php

namespace App\Http\Controllers;
use APP\registration;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    //
    public function show()
    {
        return view('user.register');
    }
    public function save(Request $request)
    {

        $reg=new registrations();
        $reg->name=$request->input("name");
        $reg->email=$request->input("email");
        $reg->password=$request->input("password");



        $reg->save();

        return redirect()->route('user.login');


    }
}
