<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingsController extends Controller
{
    //
    function catagories()
    {
        return view('admin.settings.categories.index');
    }
    function general()
    {
        return view('admin.settings.general');
    }   
}
