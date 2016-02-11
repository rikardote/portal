<?php 
use App\Modules\Inventario\Http\Domain\Models\Ip;

function ipUser($ip)
{	
	$datos = Ip::where('ip', '=', $ip)->get()->first();
    return $datos->name;
}