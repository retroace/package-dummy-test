<?php
namespace RetroAce\PackageDummyTest\Controllers\API;


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
		return response()->json([
			'message' => 'This was a success',
			'status' => 'Happy'
		], 200);
	}
}
