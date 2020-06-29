<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postagem;
use App\Comentario;
use App\Usuario;
use DB;

class PostagemController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        //$postagens = Postagem::All();
        $postagens = DB::table('postagem')
                        ->join('usuario', 'usuario.usuario_id', '=', 'postagem.fk_usuario_id')
                        ->select('postagem.*', 'usuario.usuario_username')
                        ->get();
        return view('postagem.index', array('postagens' => $postagens));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('postagem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $postagem = Postagem::create($request->all());
        
        return redirect('postagem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //$postagem = Postagem::find($id);
        $postagem = DB::table('postagem')
                        ->join('usuario', 'usuario.usuario_id', '=', 'postagem.fk_usuario_id')
                        ->where('postagem.postagem_id', $id)
                        ->select('postagem.*', 'usuario.*')
                        ->get();

        //$comentario = Comentario::All()->where('fk_postagem_id', $id);
        $comentario = Db::table('comentario')
                        ->join('usuario', 'usuario.usuario_id', '=', 'comentario.fk_usuario_id')
                        ->where('comentario.fk_postagem_id', $id)
                        ->select('usuario.*', 'comentario.*')
                        ->get();
        return view('postagem.show', array('postagens' => $postagem), 
                                    array('comment' => $comentario));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }

    public function destroyConfirm($id){
        $postagem = Postagem::find($id);

        return view('postagem.destroy', ['postagem'=>$postagem]);
    }
}
