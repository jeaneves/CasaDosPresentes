<?php

namespace App\Http\Controllers;

use App\User;
use App\Lista;
use App\Categorias;
use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    
    public function index()
    {
        //
        $qtde = 0;
        $qtdeReg = $this->qtde_registro();
        
        if ($qtdeReg)
        {
            $qtde = $qtdeReg->qtde;
        }

        $produtos = $this->listarprodu();

        $categorias = $this->listarcategorias();


        return view('lista.listaindex',['registros' => $qtde, 'produtos' => $produtos, 'categorias' => $categorias]);
    }
    
    public function viewModal(Request $request)
    {
        $veiculos = null;
              
       // $frota = Frota::find($request->id);            

     //   if ($frota != null)
     //   {
   
     //       $veiculos = $this->loadVeiculos($frota->id);
     //   }

     $produto = Produto::find($request->id);  
      
        return view('lista.modal', ['produto' => $produto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /*Funçoes adicionais */
    function qtde_registro()
    {
        $qtde = DB::select("select count(1) as qtde from users");
        $qtde =$qtde[0];
        return $qtde;

    }

    function listarprodu(){
        $produtos = DB::select("select * from produtos where status = 'A'");
        return $produtos;

    }

    function listarcategorias(){
        $categorias = DB::select("select * from categorias ");
        return $categorias;
    }
}

