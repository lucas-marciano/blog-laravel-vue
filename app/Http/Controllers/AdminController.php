<?php

namespace App\Http\Controllers;

use App\Artigo;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$breadcrumbs = json_encode([
    		['titulo' => 'Home', 'url' => '']
    	]); 

    	$cards = array();
        $cards['usuarios']        = User::all()->count();
        $cards['autores']         = User::where('autor', 'S')->count();
        $cards['administradores'] = User::where('isadmin', 'S')->count();
        $cards['artigos']         = Artigo::all()->count();

        return view('home', compact('breadcrumbs', 'cards'));
    }
}
