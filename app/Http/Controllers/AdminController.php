<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteSettingsRequest;
use Illuminate\Http\Request;
use App\Models\Settings;
class AdminController extends Controller
{
    function Index()
    {
        return view('admin.index');
    }
    function Settings() {
        $Settings = Settings::all()->find('1');
        return view('admin.settings',compact('Settings'));
    }
    function SettingsUpdate(SiteSettingsRequest $request){
        $name = $request->input('name');
    }
}
