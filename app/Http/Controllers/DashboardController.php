<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
       return view('admin.dashboard') ;
    }

    public function appointment(){
        return view('admin.appointments');
    }
}
