<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  // Dashboard - Ecommerce
  public function index()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/content/dashboard/dashboard', ['pageConfigs' => $pageConfigs]);
  }
}
