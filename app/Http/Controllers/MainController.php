<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function Index()
    {
        return view('index');
    }

    function Dashboard()
    {
        return view('dashboard.index');
    }
}
