<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class CorporateInfoController extends Controller
{
  public function setlangFirst(Request $request)
  {

    if ($request->lang == 'th' || $request->lang == 'en') {
      Session::put('Lang', $request->lang);
      App::setLocale($request->lang);
      return redirect("/$request->lang" . $request->path);
    } else {
      return back();
    }
  }
  function setLang()
  {
    if (Session::get('Lang')) {
      return redirect('/' . Session::get('Lang'));
    } else {
      Session::put('Lang', 'th');
      return redirect('/' . Session::get('Lang'));
    }
  }
  function index()
  {
    return view('frontend.index');
  }

  function vision_mission()
  {
    return view('frontend.vision-mission');
  }
  function history(){
    return view('frontend.history');
  }
  function certification(){
    return view('frontend.certification');
  }
  function policyDCI(){
    return view('frontend.policyDCI');
  }
}
