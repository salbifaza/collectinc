<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('hello/world');
	}

	public function about()
	{
		return view('hello/about');
	}

	public function team()
	{
		return view('hello/team');
	}
	public function service()
	{
		return view('hello/coming soon');
	}
}
