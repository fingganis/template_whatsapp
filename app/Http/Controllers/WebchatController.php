<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebchatController extends Controller
{
    public function index()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'chat-application',
        ];

        return view('/content/webchat/app-webchat', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}
