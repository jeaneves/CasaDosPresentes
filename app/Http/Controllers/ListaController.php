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
    
    
     



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        
        return view('lista.listacadastro',['registros' => $qtde, 'produtos' => $produtos, 'categorias' => $categorias]);
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
        $request->validate([
            'nome'=>'required',
            'dataevento'=>'required',
            'tipo'=>'required'
        ]);

        $lista = new Lista([
            'id_usuario'    => $request->get('auth()->user()->id'),
            'tipo'          => $request->get('tipo'),
            'nome'          => $request->get('nome'),
            'texto'         => $request->get('texto'),
            'datacadastro'  => $request->get('datacadastro'),
            'dataevento'    => $request->get('dataevento'),
            'uf'            => $request->get('uf'),
            'cep'           => $request->get('cep'),
            'numero'        => $request->get('numero'),
            'rua'           => $request->get('rua'),
            'bairro'        => $request->get('bairro'),
            'cidade'        => $request->get('cidade'),
            'foto'          => $request->get('foto'),
            'telefone'      => $request->get('telefone'),
            'telefone_dois' => $request->get('telefone_dois'),
        ]);

        $lista->save();
        return redirect('listas/create')->with('success', 'Lista Salva!');
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

    public function consultalista($tipo)
    {
        $qtde = 0;
        $qtdeReg = $this->qtde_registro();
        
        if ($qtdeReg)
        {
            $qtde = $qtdeReg->qtde;
        }

        

        $produtos = $this->listarprodu();

        $categorias = $this->listarcategorias();

        $listas = $this->consultarlistas();


        return view('lista.listaconsulta',[ 'registros'  => $qtde
                                          , 'produtos'   => $produtos
                                          , 'categorias' => $categorias
                                          , 'listas'     => $listas]);   
    
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

    function consultarlistas(){
        $listas = DB::select("select * from listas where tipo = 3");
        return $listas;
    }

}

