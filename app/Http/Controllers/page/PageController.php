<?php
namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Http\Controllers\database\DataBase;

class PageController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }


	public function index()
	{

	return view('page.home');
	
	}

	public function blog()
	{

	return view('page.blog');

	}

	public function about()
	{

	return view('page.about');

	}

	public function contact()
	{

	return view('page.contact');

	}

	public function test()
	{
		// $test = new Database();
		// echo $test->coba();
		return view('dashboard.mainboard');

	}

}