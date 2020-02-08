<?php

namespace App\Http\Controllers;


use App\Lista;
use App\Categorias;
use App\Welcome;
use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produtos = $this->listarprodu();
        return view('welcome',['produtos' => $produtos]);
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

    public function detprodu($id)
    {        
        $produto = $this->detalheprodu($id);

        $produrelacionado = $this->produrelacionado($produto->cod_marca, $produto->cod_prod);

        return view('produtowelcome',['produto' => $produto, 'produrelacionado' => $produrelacionado]);

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

    /*-------------------------------------------------*/
    function listarprodu(){
        $produtos = DB::select("select * from produtos");
        return $produtos;
    }

    function detalheprodu($id){
        $produto = Produto::find($id);
        return $produto;
    }

    /*Funçoes adicionais */
    function qtde_registro()
    {
        $qtde = DB::select("select count(1) as qtde from users");
        $qtde =$qtde[0];
        return $qtde;

    }

    // function listarprodu(){
    //     $produtos = DB::select("select * from produtos where status = 'A'");
    //     return $produtos;

    // }

    function listarcategorias(){
        $categorias = DB::select("select * from categorias ");
        return $categorias;
    }

    function consultarlistas(){
        $listas = DB::select("select * from listas where tipo = 3");
        return $listas;
    }

    function produrelacionado($codMarca, $codProd){
        $marca = DB::select ("select produtos.nome_prod, produtos.preco_vend ,produtos.id from produtos produtos left join marcas marcas on (produtos.cod_marca = marcas.codigo) where marcas.codigo = ".$codMarca." and produtos.cod_prod <>".$codProd);
        return $marca;

    }
}
