<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
//use Illuminate\View\View;
use Illuminate\Support\Facades\View;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
//    public function __construct()
//    {
//        $this->Dangnhap();
//    }
//    public function Dangnhap(){
//        if(Auth::check()){
//            View::share(['user_login'=>Auth::quantri()]);
//        }
  //  }
}
