<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'produtos';
}
