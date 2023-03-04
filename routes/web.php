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
//Frontend
 Route::get('/','frontend\CorporateInfoController@setLang');
 Route::get('/setlang','frontend\CorporateInfoController@setlangFirst'); 
 foreach($lang as $i){
  Route::get("/$i",'frontend\CorporateInfoController@index');
  Route::get("/$i/vision-mission",'frontend\CorporateInfoController@vision_mission');
  Route::get("/$i/history","frontend\CorporateInfoController@history");
  Route::get("/$i/certification","frontend\CorporateInfoController@certification");
  Route::get("/$i/policyDCI","frontend\CorporateInfoController@policyDCI");

  Route::get("/$i/production","frontend\ManufacturingController@production");
  Route::get("/$i/quality_control","frontend\ManufacturingController@quality_control");

  Route::get("/$i/products","frontend\ProductsController@productsIndex");

  Route::get("/$i/news","frontend\NewsController@newsIndex");
  Route::get("/$i/news_detail","frontend\NewsController@news_detail");

  Route::get("/$i/environment_management","frontend\SustainabilityController@environment_management");
  Route::get("/$i/engergy_management","frontend\SustainabilityController@engergy_management");
  Route::get("/$i/safety","frontend\SustainabilityController@safety");
  
  Route::get("/$i/careers","frontend\CareersController@careers");
  Route::get("/$i/career_policy","frontend\CareersController@career_policy");
  Route::get("/$i/career_form","frontend\CareersController@career_form");

  Route::get("/$i/planttour","frontend\PlantTourController@planttour");
  Route::get("/$i/planttour_detail","frontend\PlantTourController@planttour_detail");

  Route::get("/$i/contact","frontend\ContactController@contact");

 }

 //Backend
 Route::get('/dashboard/home','backend\BackofficeController@index');
 Route::get('/dashboard/login','backend\BackofficeController@login');

 Route::get('/dashboard/production_process','backend\BackofficeController@production_process');
 Route::get('/dashboard/production_process/add','backend\BackofficeController@production_process_add');
 Route::get('/dashboard/production_process/edit','backend\BackofficeController@production_process_edit');

 Route::get('/dashboard/quality_control','backend\BackofficeController@quality_control');
 Route::get('/dashboard/quality_control/add','backend\BackofficeController@quality_control_add');
 Route::get('/dashboard/quality_control/edit','backend\BackofficeController@quality_control_edit');

 Route::get('/dashboard/production_detail','backend\BackofficeController@production_detail');
 Route::get('/dashboard/production_detail/add','backend\BackofficeController@production_detail_add');
 Route::get('/dashboard/production_detail/edit','backend\BackofficeController@production_detail_edit');

 Route::get('/dashboard/product_technology','backend\BackofficeController@product_technology');

 Route::get('/dashboard/news_activities','backend\BackofficeController@newsActivitiesIndex');
 Route::get('/dashboard/news_activities/add','backend\BackofficeController@newsActivitiesAdd');

 Route::get('/dashboard/careers','backend\BackofficeController@careersIndex');
 Route::get('/dashboard/careers/add','backend\BackofficeController@careersAdd');
 Route::get('/dashboard/careers/edit','backend\BackofficeController@careersEdit');


