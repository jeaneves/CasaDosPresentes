<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    //
    protected $fillable = [
            'id_usuario'   
           ,'tipo'         
           ,'nome'         
           ,'texto'        
           ,'datacadastro' 
           ,'dataevento'   
           ,'uf'           
           ,'cep'          
           ,'numero'       
           ,'rua'          
           ,'bairro'       
           ,'cidade'       
           ,'foto'         
           ,'telefone'     
           ,'telefone_dois'
    ];
}
