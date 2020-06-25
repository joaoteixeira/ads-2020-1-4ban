<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model{
    protected $primaryKey  = 'comentario_id';
    protected $table = 'comentario';
    protected $fillable = ['comentario_texto', 'fk_comentario_id', 'fk_postagem_id', 'fk_usuario_id'];
    //fk_comentario_id int, fk_postagem_id int, fk_usuario_id int,
    public $timestamps = false;  
}