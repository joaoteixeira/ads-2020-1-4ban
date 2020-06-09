@extends('layouts.admin')

@section('content-title', 'Postagens')

@section('content')
    <div class="mb-3">
        <div>
            <p>{{ $postagem->postagem_up }}</p>
            <p>{{ $postagem->postagem_down }}</p>
        </div>
        <div>
            <h3>{{ $postagem->postagem_titulo }}</h3>
        </div>
        <div>
            <p>{{ $postagem->postagem_data_publicacao }}</p>
            <p>{{ $postagem->postagem_texto }}</p>
        </div>
    </div>
@endsection()