<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeDashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
}