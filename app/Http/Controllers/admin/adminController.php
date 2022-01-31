<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index()
    {
        return view('admin.index');
    }
    function addrestaurants()
    {
        return view('admin.add-restaurants');
    }
    function activerestaurants()
    {
        return view('admin.active-restaurants');
    }
    function trashedrestaurants()
    {
        return view('admin.trashed-restaurants');
    }
    function blockedrestaurants()
    {
        return view('admin.blocked-restaurants');
    }
    function adddrivers()
    {
        return view('admin.add-drivers');
    }
    function newdrivers()
    {
        return view('admin.new-drivers');
    }
    function activedrivers()
    {
        return view('admin.active-drivers');
    }
    function blockeddrivers()
    {
        return view('admin.blocked-drivers');
    }
    function trasheddrivers()
    {
        return view('admin.trashed-drivers');
    }
    function reviewrating()
    {
        return view('admin.review-rating');
    }
    function viewreviews()
    {
        return view('admin.view-review');
    }

    

}
