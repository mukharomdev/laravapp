<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{   
	public function __construct(){
		$this->middleware('auth');
	}
    public function admin(){
    	return view('dashboard.mainboard');
    }
}
