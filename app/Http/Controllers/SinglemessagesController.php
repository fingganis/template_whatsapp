<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglemessagesController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/single-messages/page-singlemessage', ['pageConfigs' => $pageConfigs]);
    }
}
