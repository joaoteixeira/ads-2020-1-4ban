@extends('layouts.admin')

@section('content-title', 'Postagens')

@section('content')
    <div class="card mt-4">
        <div class="card-body">
            <h3>{{ $postagens->postagem_titulo }}</h3>
            <p>{{ $postagens->postagem_data_publicacao }}</p>
            <p>{{ $postagens->postagem_texto }}</p>
        </div>
    </div>

    <div>
        <div class="card card-outline-secondary my-4">
            <div class="card-header">Comentários</div>
            
            @foreach($comentarios as $comentarios)
                <div class="card-body">
                    <p>{{ $comentarios->comentario_texto }}</p>
                    <small class="text-muted">Postado por {{ $comentarios->fk_usuario_id }} em {{$comentarios->comentario_data_publicacao}}</small>
                    <hr>

                    @foreach($respostas as $respostas)
                        <p>{{ $respostas->comentario_texto }}</p>
                        <small class="text-muted">Postado por {{ $respostas->fk_usuario_id }} em {{$respostas->comentario_data_publicacao}}</small>
                        <hr>
                    @endforeach
                    
                </div>
            @endforeach

        </div>
    </div>
@endsection()