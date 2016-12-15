<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Province;
class DashboardController extends Controller
{
    public function index() {
    	return view('dashboard.index');	
    }

    public function createAd() {
    	$data = array('Aguinaldo','Alfonso Lista','Asipulo','Banaue','Hingyon','Hungduan','Kiangan','Lagawe','Lamut','Mayoyao','Tinoc');
    	foreach($data as $d) {
    		DB::table('municipality')->insert(
	    		['name' => $d,'province_id'=>35]

	    	);
    	}
    	/*DB::table('province')->insert(
    		['name'=> 'Agusan del Norte'],
    		['name' => 'Agusan del Sur']

    	);*/
    	//return view('dashboard.create_ad');
    }
}
