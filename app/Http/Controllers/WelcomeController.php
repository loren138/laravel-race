<?php namespace App\Http\Controllers;
use Session;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Initialize all to 0
		$a = 'a';
		for ($i = 1; $i <= 26; $i++) {
			Session::put('vals.'.$a, Session::get('vals.'.$a, 0));
			$a++;
		}
		$vals = Session::get('vals');
		ksort($vals);
		return view('welcome', array('vals' => $vals));
	}
	
	public function reset()
	{
		Session::put('vals', array());
		return $this->index();
	}
	
	public function inc($a)
	{
		Session::put('vals.'.$a, Session::get('vals.'.$a, 0) + 1);
		return response()->json(array('vals' => Session::get('vals'), 'inc' => $a));
	}
	
	public function vals()
	{
		$vals = Session::get('vals');
		$vals['Final'] = '';
		return response()->json(array('vals' => $vals, 'inc' => 'Final'));
	}

}
