<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BulkController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/bulk/page-bulk', ['pageConfigs' => $pageConfigs]);
    }
}
