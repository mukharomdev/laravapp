<?php

namespace App\Http\Controllers\collection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class CollectionController extends Controller
{
	    public function collectionSatu()
	{
		$myArray = [1, 9, 3, 4, 5, 3, 5, 7];
		$collection = new Collection($myArray);
		dump($collection);
	 
	}

}
