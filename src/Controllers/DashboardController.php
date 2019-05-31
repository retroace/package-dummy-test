<?php
namespace RetroAce\PackageDummyTest\Controllers;


use \App\Http\Controllers\Controller as Controller;
use App\User;

/**
 * 
 */
class DashboardController extends Controller
{

	public function __construct()
	{ }

	public function index()
	{
		return view('admin::dashboard.index');
	}
}
