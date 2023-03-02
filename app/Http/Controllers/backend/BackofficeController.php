<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    function index(){
      return view('backend.home.index');
    }
    function production_process(){
      return view('backend.manufacturing.production_process.index');
    }
    function production_process_add(){
      return view('backend.manufacturing.production_process.add');
    }
    function production_process_edit(){
      return view('backend.manufacturing.production_process.edit');
    }
    function quality_control(){
      return view('backend.quality_control');
    }
    function product_technology(){
      return view('backend.product_technology');
    }
    function news_activities(){
      return view('backend.news_activities');
    }
}
