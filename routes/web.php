<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$lang = ['th','en'];
if(Session::get('lang') == null){
    $glang = Request::segment(1);
    if($glang == 'th' || $glang == 'en'){
        Session::put('lang',$glang);
        App::setLocale($glang);
    }
}

// ***********************************************************************************************************************
 Route::get('/','CorporateInfoController@setLang');
 Route::get('/setlang','CorporateInfoController@setlangFirst'); 
 foreach($lang as $i){
  Route::get("/$i",'CorporateInfoController@index');
  Route::get("/$i/vision-mission",'CorporateInfoController@vision_mission');
  Route::get("/$i/production","ManufacturingController@production");
 }
 Route::get('/dashboard/home','BackOfficeController@index');
 Route::get('/dashboard/home','BackOfficeController@index');
//  Route::get('/change_laguage_show/{lang}',[MenuHeadController::class, 'change_laguage_show'])->name('change_laguage_show');

