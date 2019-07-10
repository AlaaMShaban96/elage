<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Business;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function user_login_veiw()
    {
      
       return view("user.user_login_v")->with('a',"no");
    }


    public function business_login_veiw()
    {
      return view('business.type_of_business');
    }


     public function login_business()
     {
      $business = Business::where('login_name', request()->login_name )->first();
      
      
      if ($business->password == request()->password) {

        switch ($business->type) {
          case 'lab': 
            return view('business/lab/index')->with("business",$business);
            break;
          case 'pharmacie':
            return view()->with("business",$business);
            break;
          case 'hospital':
            return view()->with("business",$business);
            break;
        }

      }else {
        return "Nooo :(";
      }

     
     
     
     }
     public function user_login()
     {
      
      request()->validate([
        'login_name'  =>  'required|min:3',
       
    ]);
      $user = User::where('login_name', request()->login_name )->first();
     if(isset($user)){
          if ($user->password == request()->password ) {
          
            return view("user/index")->with('user',$user);
        }else {

                    return view("user.user_login_v")->with("a","no");
        }
      }else {
        return [
          'title.required' => 'A title is required',
          'body.required'  => 'A message is required',
      ];
      }
    
      }




}
