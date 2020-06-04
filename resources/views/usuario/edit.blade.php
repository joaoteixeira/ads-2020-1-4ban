@extends('layouts.admin')

@section('content-title', 'Editar Usuario')

@section('content')
    <form action="/usuario/{{ $usuario->usuario_id }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="text" class="form-control" name="usuario_email" value="{{ $usuario->usuario_email }}">
        </div>
        <div class="form-group">
            <label for="">Login</label>
            <input type="text" class="form-control" name="usuario_login" value="{{ $usuario->usuario_login }}">
        </div>
        <div class="form-group">
            <label for="">Nome de usuario</label>
            <input type="text" class="form-control" name="usuario_username" value="{{ $usuario->usuario_username }}">
        </div>
        <div class="form-group">
            <label for="">Senha</label>
            <input type="text" class="form-control" name="usuario_senha" value="{{ $usuario->usuario_senha }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="/usuario" class="btn btn-danger">Cancelar</a>
    </form>
@endsection()