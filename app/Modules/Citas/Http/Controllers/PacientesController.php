<?php
namespace App\Modules\citas\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class PacientesController extends Controller
{

	public function __construct()
	{
	        $this->middleware('auth');
	  
	}

	public function index()
	{
	    $site = 'citas';

	    $user = User::find(\Auth::user()->id);
	    $user_espe = $user->permisos;
	    //dd($user_espe->implode('name', ', '));
	    $x = ($user_espe->implode('name', ', '));
	    $s = explode(",", $x);
		//dd($site);	    
  
	   for($i=0; $i < count($s); $i++)
    {
        if($site == $s[$i] )
            echo $i;
    } 

	}

}
