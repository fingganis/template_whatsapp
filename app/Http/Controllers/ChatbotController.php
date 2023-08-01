<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/chatbot/page-chatbot', ['pageConfigs' => $pageConfigs]);
    }
}
