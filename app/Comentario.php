<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model{
    protected $primaryKey  = 'comentario_id';
    protected $table = 'comentario';
    protected $fillable = ['comentario_data_publicacao', 'comentario_texto', 'comentario_fixado', 'usuario_username', 'usuario_data_cadastro'];
    //fk_comentario_id int, fk_postagem_id int, fk_usuario_id int,
    public $timestamps = false;  
}