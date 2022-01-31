<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class driverController extends Controller
{
    //
    function newRequest()
    {
        return view('admin.drivers.new-request');
    }
    function add()
    {
        return view('admin.drivers.add');
    }
    function active()
    {
        return view('admin.drivers.active');
    }
    function blocked()
    {
        return view('admin.drivers.blocked');
    }
    function trashed()
    {
        return view('admin.drivers.trashed');
    }
}
