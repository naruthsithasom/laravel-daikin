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
 Route::get('/','frontend\CorporateInfoController@setLang');
 Route::get('/setlang','frontend\CorporateInfoController@setlangFirst'); 
 foreach($lang as $i){
  Route::get("/$i",'frontend\CorporateInfoController@index');
  Route::get("/$i/vision-mission",'frontend\CorporateInfoController@vision_mission');
  Route::get("/$i/production","frontend\ManufacturingController@production");
 }
 Route::get('/dashboard/home','backend\BackofficeController@index');
 Route::get('/dashboard/production_process','backend\BackofficeController@production_process');
 Route::get('/dashboard/production_process/add','backend\BackofficeController@production_process_add');
 Route::get('/dashboard/production_process/edit','backend\BackofficeController@production_process_edit');
 Route::get('/dashboard/quality_control','backend\BackofficeController@quality_control');
 Route::get('/dashboard/product_technology','backend\BackofficeController@product_technology');
 Route::get('/dashboard/news_activities','backend\BackofficeController@news_activities');


