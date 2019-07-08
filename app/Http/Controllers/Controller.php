<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login_for_User()
    {
       return "body";
    }

    public function business_veiw()
    {
      return view('business.type_of_business');
    }
     public function login_business()
     {
       var_dump( request()->username);
     
     }




}
