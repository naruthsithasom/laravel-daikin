<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class ProductsController extends Controller
{
  public function setlangFirst(Request $request){

    if($request->lang == 'th' || $request-> lang == 'en'){
      Session::put('Lang',$request->lang);
      App::setLocale($request->lang);
      return redirect("/$request->lang".$request->path);
    }else {
      return back();
    }
  }
  function setLang(){
    if(Session::get('Lang')){
      return redirect('/'.Session::get('Lang'));
    }else {
      Session::put('Lang','th');
      return redirect('/'.Session::get('Lang'));
    }
  }
  function productsIndex(){
    return view('frontend.products');
  }
}
