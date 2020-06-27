@extends('layouts.admin')

@section('content-title', 'Postagem')

@section('head')
@endsection()

@section('content')
    @foreach($usuarios as $usuarios)
    <div class="card mt-4">
        <div class="card-body">
            <h3>{{ $usuarios->usuario_email }}</h3>
            <p>Login: {{ $usuarios->usuario_login }}</p>
            <p>User Name: {{ $usuarios->usuario_username }}</p>
            <p>Data de Cadastro: {{ $usuarios->usuario_data_cadastro }}</p>
        </div>
    </div>
    @endforeach

    @foreach($postagens as $postagens)
    <div class="card mt-2">
        <div class="card-body">
            <a href="{{ route('postagem.show', $postagens) }}" method="post">
                <h5>{{ $postagens->postagem_titulo }}</h5>
            </a>
            <p>{{ $postagens->postagem_data_publicacao }}</p>
        </div>
    </div>
    @endforeach

@endsection()