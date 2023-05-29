<?php
namespace App\Http\Controllers;
class PageController extends Controller
{
public function index(){

return view('page.home');

}

public function blog(){

return view('page.blog');

}

public function about(){

return view('page.about');

}

public function contact(){

return view('page.contact');

}

}