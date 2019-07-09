<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;

class BusinessController extends Controller
{
    public function view()
    { 
       
        return view('business/sinup');
       
    }
    public function stor()
    {
       
        $user= new Business;
        $user->login_name=request()->login_name;
        $user->password=request()->password;
        $user->email=request()->email;
        $user->type=request()->type;
        $user->save();
        return view('business.login');
    }
}
