<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubsController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/subs/page-subs', ['pageConfigs' => $pageConfigs]);
    }
    public function payment($id = null)
    {
        // dd($id)
        $pageConfigs = ['pageHeader' => false];
        return view('/content/subs/page-payment', ['pageConfigs' => $pageConfigs],compact('id'));
    }
}
