@extends('layouts.admin')

@section('content-title', 'Remoção de postagem')

@section('content')
    <p class="text-danger">
        Deseja realmente a postagem abaixo?
    </p>
    <form action="{{ route('postagem.destroy', $postagem->postagem_id) }}" method="post">
        @csrf
        @method('DELETE')

        <p>
            <b>Titulo: </b> {{ $postagem->postagem_titulo }} <br>
            <b>Texto: </b> {{ $postagem->postagem_texto }} <br>
            <b>Data: </b> da postagem: {{ $postagem->postagem_data_publicacao }} <br>
        </p>

        <button class="btn btn-warning" type="submit">Sim</button>
        <a href="{{ route('postagem.index') }}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection()