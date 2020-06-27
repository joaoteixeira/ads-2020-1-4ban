@extends('layouts.admin')

@section('content-title', 'Usuarios cadastrados')

@section('content')
    <a href="{{ route('usuario.create') }}" class="btn btn-primary">Novo Usuario</a>

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    @if(session('statusUpdate'))
        <div class="alert alert-info">
            {{session('status')}}
        </div>
    @endif

    @if(count($usuario))
        <div class="alert alert-info">
            Nenhum registro encontrado
        </div>
    @endif

    @if(count($usuario))
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>E-mail</th>
                    <th>Login</th>
                    <th>Username</th>
                    <th>Data de Cadastro</th>
                    <th>Opçõse</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuario as $usuario)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $usuario->usuario_email }}</td>
                        <td>{{ $usuario->usuario_login }}</td>
                        <td>{{ $usuario->usuario_username }}</td>
                        <td>{{ $usuario->usuario_data_cadastro }}</td>
                        <td>
                            <a href="{{ route('usuario.edit', $usuario->usuario_id) }}">Editar</a>
                            <!-- <form action="{{ route('usuario.destroy', $usuario->usuario_id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-link btn-sn" type="submit">Excluir 1</button>
                            </form> -->
                            <a href="{{ route('usuario.destroy-confirm', $usuario->usuario_id) }}">Excluir</a>
                            <a href="{{ route('usuario.show', $usuario->usuario_id) }}">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection()