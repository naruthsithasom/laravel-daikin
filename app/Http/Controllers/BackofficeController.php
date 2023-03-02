<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    function index(){
      return view('backend.index');
    }
    function manufacturing(){
      return view('backend.manufacturing');
    }
}
