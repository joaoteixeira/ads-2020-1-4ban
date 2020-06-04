<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model{
    protected $primaryKey  = 'usuario_id';
    protected $table = 'usuario';
    protected $fillable = ['usuario_email', 'usuario_login', 'usuario_senha', 'usuario_username', 'usuario_data_cadastro'];
    public $timestamps = false;  
}
