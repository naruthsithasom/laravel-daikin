<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
      return view('frontend.index');
    }
    function vision_mission(){
      return view('frontend.vision-mission');
    }
}
