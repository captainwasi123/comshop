<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
     
    function add()
    {
        return view('admin.users.add');
    } 
    function active()
    {
        return view('admin.users.active');
    }
    function blocked()
    {
        return view('admin.users.blocked');
    }
    function trashed()
    {
        return view('admin.users.trashed');
    }   
}
