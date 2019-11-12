<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $produtos = $this->listarprodu();

        return view('welcome',['produtos' => $produtos]);
        
        
    }
/*-------------------------------------------------*/
    function listarprodu(){
        $produtos = DB::select("select * from users");
        return $produtos;
    }

}