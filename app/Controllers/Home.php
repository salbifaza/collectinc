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
	public function profile()
	{
		return view('hello/profile');
	}
	public function order()
	{
		return view('hello/order');
	}
	public function history()
	{
		return view('hello/history');
	}
	public function learn_more()
	{
		return view('hello/learn_more');
	}
}
