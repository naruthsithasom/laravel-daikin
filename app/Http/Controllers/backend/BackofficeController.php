<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

class BackofficeController extends Controller
{
    public function index()
    {
        return view('backend.home.index');
    }
    public function login()
    {
        return view('backend.auth.login');
    }
    public function production_process()
    {
        return view('backend.manufacturing.production_process.index');
    }
    public function production_process_add()
    {
        return view('backend.manufacturing.production_process.add');
    }
    public function production_process_edit()
    {
        return view('backend.manufacturing.production_process.edit');
    }
    public function production_detail()
    {
        return view('backend.manufacturing.production_detail.index');
    }
    public function production_detail_add()
    {
        return view('backend.manufacturing.production_detail.add');
    }
    public function production_detail_edit()
    {
        return view('backend.manufacturing.production_detail.edit');
    }
    public function quality_control()
    {
        return view('backend.manufacturing.quality_control.index');
    }
    public function quality_control_add()
    {
        return view('backend.manufacturing.quality_control.add');
    }
    public function quality_control_edit()
    {
        return view('backend.manufacturing.quality_control.edit');
    }
    public function product_technology()
    {
        return view('backend.product_technology');
    }
    public function newsActivitiesIndex()
    {
        return view('backend.newsactivities.index');
    }
    public function newsActivitiesAdd()
    {
        return view('backend.newsactivities.add');
    }
    public function careersIndex()
    {
        return view('backend.careers.index');
    }
    public function careersAdd()
    {
        return view('backend.careers.add');
    }
    public function careersEdit()
    {
        return view('backend.careers.edit');
    }
}
