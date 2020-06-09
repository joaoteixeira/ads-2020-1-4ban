<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postagem extends Model{
    protected $primaryKey  = 'postagem_id';
    protected $table = 'postagem';
    protected $fillable = ['postagem_titulo', 'postagem_up', 'postagem_down', 'postagem_data_publicacao', 'postagem_texto'];
    //fk_usuario_id int,
    public $timestamps = false;  
}