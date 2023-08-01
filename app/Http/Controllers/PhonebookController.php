<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/phonebook/page-phonebook', ['pageConfigs' => $pageConfigs]);
    }
}
