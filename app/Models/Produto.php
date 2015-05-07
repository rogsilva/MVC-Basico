<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Produto extends Eloquent {


    protected $table = 'produtos';


    protected $hidden = array();

    protected $fillable = array('codigo', 'descricao', 'valor');

}
