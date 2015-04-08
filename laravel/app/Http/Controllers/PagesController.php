<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about() {

		//$first = 'Tiago';

		//$foods = [];
		
		 $foods = [
			'pizza green', 'hamburger soy', 'soup cheese'
		 ];

		//using php compact function
		return view('pages.about', compact('foods'));

		/*
		return view('pages/about')->with([

			// 'key' => 'value'

			'first' => 'Tiago',
			'last' => 'Morgado'

		]);
		*/
	}

	public function contact() {

		return view('pages.contact');

	}

}
