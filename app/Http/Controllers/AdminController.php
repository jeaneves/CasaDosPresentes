<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Lista;
use App\Categorias;
use Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
        $qtde_produ = 0;
        
        $qtdeReg = $this->quantidades();
        
        if ($qtdeReg)
        {
            $qtde = $qtdeReg->qtdeU;
        }

        
        $produReg = $this->quantidade_produ();

        if ($produReg)
        {
            $qtde_produ = $produReg->qtdeprodu;
        }
        
        
        

        if (Auth::user()->isAdmin == 1){
            return view('admin.adminindex',['usuarios' => $qtde, 'qtde_produtos' => $qtde_produ]);    
        }else{
            return  redirect()->to(url('/'));
        }

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


    public function categoria(){
        return view('admin.categoria');
    }
    public function listas(){
        return view('admin.listas');
    }
    public function produtos(){
        return view('admin.produtos');
    }
    
    public function usuarios(){
        return view('admin.usuarios');
    }


    /*Funçoes adicionais */
    function busca_useradmin($id_usuario)
    {
        $adm = DB::select(" select isAdmin from users where id = $id_usuario");
        $adm= $adm[0];
        return $adm;

    }

    function quantidades()
    {
        $qtde_user = DB::select("select count(1) as qtdeU from users where isAdmin = 0");
        $qtde_user =$qtde_user[0];
        return $qtde_user;

    }

    function quantidade_produ(){
        
        $qtde_produ = DB::select("select count(1) as qtdeprodu from produtos where status = 'A'");
        $qtde_produ = $qtde_produ[0];
        return $qtde_produ;
    }

    

}
