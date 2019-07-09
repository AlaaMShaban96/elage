<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Business;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function user_login_veiw()
    {
       return view("user.user_login");
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




}
