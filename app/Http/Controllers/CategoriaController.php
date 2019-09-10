<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Categorias;

use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
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
    
    public function index(){
        //
        $categorias = $this->consultacategoria();
       

        $count = 0;
        
        return view('admin.consultacategoria',['categorias'=>$categorias, 'count'=>$count]);
    }

      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
            
        return view('admin.cadastrocategoria');
       
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
            'imagem'=>'required'         

        ]);
     


        file_put_contents( $_FILES['imagem_slide']['name'], $_FILES['imagem_slide']);
        
        

        $categoria = new Categorias([
            'nome' => $request->get('nome'),
            'descricao' => $request->get('descricao'),
            'imagem' => $request->get('imagem'),
            'imagem_slide' => $_FILES['imagem_slide']['name'],
            'apareceslide' => $request->get('apareceslide')
        ]);
  
//
  //      $imageName = url() . $request->file('imagem_slide')->getClientOriginalName();
        
      
      //  file_put_contents( $imageName, $request->file('imagem_slide'));
//
   //   FileAs('', $file, $filenewname);
      Storage::disk('local')->putFileAs('CategoriaImages', $request->file('imagem_slide'),'foto.jpg');
      //Storage::disk('local')->put('CategoriaImages',  $request->file('imagem_slide'));

     //   $imageName = asset($imageName);               


        


    

        $categoria->apareceslide = $request->input('apareceslide') ? true : false;

        $categoria->save();
        return redirect('admin/categoria')->with('success', 'Categoria Salva!');
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
    public function edit($categoria)
    {
        //
         $categoria = Categorias::findOrFail($categoria);
        // return view('admin.editarcategoria',compact('categoria'));
        return view('admin.editarcategoria',compact('categoria'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoria)
    {
        /**/ 
        $request->validate([
            'nome'         => 'required',
            'descricao'    => 'required',
            'imagem'       => 'required',
            'imagem_slide' => 'required',
            'apareceslide' => 'required'
            
        ]);

        $form_data= array(
            'nome'         => $request->nome,
            'descricao'    => $request->descricao,
            'imagem'       => $request->imagem,
            'imagem_slide' => $request->imagem_slide,
            'apareceslide' => $request->apareceslide
        );

        
        Categorias::whereId($categoria)->update($form_data);
        
        return redirect('admin/categoria')->with('success', 'Categoria Atualizada!');
        //$categoria->update($request->all());
        
        // return redirect()->route('categoria.index')
        //                  ->with('success','Categoria atualizada!');
        
                

        // $categorias = Categorias::find($request->get('id'));
        // $categorias ->nome         = $request->get('nome');
        // $categorias ->descricao    = $request->get('descricao');
        // $categorias ->imagem       = $request->get('imagem');
        // $categorias ->imagem_slide = $request->get('imagem_slide');
        // $categorias ->apareceslide = $request->get('apareceslide');

        
        // $categorias ->save();
        // return redirect('admin/categoria')->with('success','Categoria Atualizada!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        // 
        $categoria = Categorias::find($id);
        $categoria->delete();

        return redirect('admin/categoria')->with('sucess', 'Lista deletada com sucesso!');
    }

    /***** funcoes  adicionais**********/
    function consultacategoria(){
        $categorias = DB::select("SELECT * FROM categorias  order by ID");
        return $categorias;
    }

   
}
