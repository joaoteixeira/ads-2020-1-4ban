<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $usuarios = Usuario::All();
        return view('usuario.index', array('usuario' => $usuarios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // $usuario = new Usuario();
        // $usuario->usuario_email = $request->usuario_email;
        // $usuario->usuario_login = $request->usuario_login;
        // $usuario->usuario_username = $request->usuario_username;
        // $usuario->usuario_senha = $request->usuario_senha;

        // $usuario->save();
        $usuario = Usuario::create($request->all());
        //falta dar uim jeito de adicionar da data de cadastro
        
        return redirect('usuario')->with('status', 'Usuario cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){//não funciona.
        $usuario = Usuario::find($id);
        return view('usuario.edit', array('usuario' -> $usuario));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $usuario = Usuario::find($id);
        $usuario->update($request->all());

        return redirect('usuario')->with('statusUpdate', 'Usuario alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){//restrição de chave estrangeira, não vai excluir os primeiros registros
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect('usuario')->with('statusUpdate', 'Usuario removido com sucesso!');
    }

    public function destroyConfirm($id){//dando o memso erro do edit, fazer do jeito acima
        $usuario = Usuario::find($id);

        return view('usuario.destroy', ['usuario'->$usuario]);
    }
}
