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
    	$site = "citas";

    	$user = User::find(\Auth::user()->id);
        $user_espe = $user->permisos;
        foreach ($user_espe as $permiso) {
	        if ($permiso->name == $site) {
	        	echo "SI esta ". $permiso->name;
	        }	
	        else {
	        	echo "Acceso Restringido";
	        }
        }
	}
}
