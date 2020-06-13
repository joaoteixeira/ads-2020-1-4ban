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
                    @if($comentarios->fk_comentario_id)
                        <div class="text-white-50 bg-dark">
                        <small class="">Id do comentário que esse comentário esta respondendo: {{ $comentarios->fk_comentario_id }}. Lembrar de trocar a consulta na tabela por uma consulta em uma view com essa tabela mais o nome do usuario que comentou</small>                        
                        </div>
                        
                    @endif
                    <p>{{ $comentarios->comentario_texto }}</p>
                    <small class="text-muted">Postado por {{ $comentarios->fk_usuario_id }} em {{$comentarios->comentario_data_publicacao}}</small>
                    <hr>                    
                </div>
            @endforeach

        </div>
    </div>
@endsection()