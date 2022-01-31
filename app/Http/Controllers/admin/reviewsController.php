<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class reviewsController extends Controller
{
    //
    function index()
    {
        return view('admin.reviews.index');
    }
    function details()
    {
        return view('admin.reviews.details');
    }
}
