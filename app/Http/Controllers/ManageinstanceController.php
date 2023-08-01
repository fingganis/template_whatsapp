<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageinstanceController extends Controller
{
    public function index()
    {
        // $pageConfigs = [
        //     'pageHeader' => false,
        //     'contentLayout' => "content-left-sidebar",
        //     'pageClass' => 'chat-application',
        // ];
        $pageConfigs = ['pageHeader' => false];
        return view('/content/manageinstance/manage-instance', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}
