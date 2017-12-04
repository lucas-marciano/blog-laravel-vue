<?php

namespace App\Http\Controllers;

use App\Artigo;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $cards['usuarios'] = User::all()->count();
//        $cards['categorias'] = User::all()->count();
//        $cards['comentarios'] = User::all()->count();
        $cards['artigos'] = Artigo::all()->count();

        return view('home', compact('breadcrumbs', 'cards'));
    }
}
