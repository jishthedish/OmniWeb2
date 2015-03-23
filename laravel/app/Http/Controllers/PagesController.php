<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

		public function contactus()
	{
		return view('contactus');
	}

		public function aboutus()
	{
		return view('aboutus');
	}

		public function promotions()
	{
		return view('promotions');
	}

		public function downloads()
	{
		return view('downloads');
	}
		public function services()
	{
		return view('services');
	}
		public function registration()
	{
		return view('registration');
	}
}
