<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lista;

class HomeController extends Controller
{
    public function index() 
    {
        $array = array();
        $lista = Lista::all();

        $array['lista'] = $lista;

        return view('home', $array);
    }

    public function create(Request $request) 
    {
        if($request->has('item') && !empty($request->input('item'))) {
            $item = $request->input('item');

            $lista = new Lista;
            $lista->item = $item;
            $lista->save();

        }

        return redirect('/');
    }

}