@extends('layouts.admin')

@section('content-title', 'Remoção de usuario')

@section('content')
    <p class="text-danger">
        Deseja realmente remover o usuario listado abaixo?
    </p>
    <form action="{{ route('usuario.destroy', $usuario->usuario_id) }}" method="post">
        @csrf
        @method('DELETE')

        <p>
            <b>E-mail: </b> {{ $usuario->usuario_email }} <br>
            <b>Login: </b> {{ $usuario->usuario_login }} <br>
            <b>Nome: </b> de usuario: {{ $usuario->usuario_username }} <br>
            <b>Data: </b> de Cadastro {{ $usuario->usuario_data_cadastro }} <br>
        </p>

        <button class="btn btn-warning" type="submit">Sim</button>
        <a href="{{ route('usuario.index') }}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection()