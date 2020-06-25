@extends('layouts.admin')

@section('content-title', 'Novo Usuario')

@section('content')
    <form action="{{ route('usuario.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="text" class="form-control" name="usuario_email">
        </div>
        <div class="form-group">
            <label for="">Login</label>
            <input type="text" class="form-control" name="usuario_login">
        </div>
        <div class="form-group">
            <label for="">Nome de usuario</label>
            <input type="text" class="form-control" name="usuario_username">
        </div>
        <div class="form-group">
            <label for="">Senha</label>
            <input type="text" class="form-control" name="usuario_senha">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection()