<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    //
    protected $fillable = [
        
        'nome', 'descricao'
        
    ];
}

// class Post extends Model
// {
//     protected $cast = [
//         'apareceslide' => 'boolean',
//     ];
// }
