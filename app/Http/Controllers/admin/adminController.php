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

}
