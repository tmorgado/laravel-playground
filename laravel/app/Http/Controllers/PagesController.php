<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about() {

		$first = 'Tiago';
		$last = 'Morgado';
		//using php compact function
		return view('pages/about', compact('first', 'last'));

		/*
		return view('pages/about')->with([

			// 'key' => 'value'

			'first' => 'Tiago',
			'last' => 'Morgado'

		]);
		*/
	}

}
