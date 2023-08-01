<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrapController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/scrap/page-scrap', ['pageConfigs' => $pageConfigs]);
    }
}
