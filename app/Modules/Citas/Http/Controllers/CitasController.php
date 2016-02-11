<?php
namespace App\Modules\citas\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class CitasController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');

	}

	public function index()
	{
	  	$site = "citas";

	    $user = User::find(\Auth::user()->id);
	    $user_espe = $user->permisos;
	    $s = explode(",", $user_espe->implode('name', ','));
		    
	    if( !in_array($site, $s) ) {
	    	return redirect()->back();
	    }
	    else {
	    	echo "en index";
	    }	
	}

}
