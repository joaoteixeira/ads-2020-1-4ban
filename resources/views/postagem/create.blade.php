@extends('layouts.admin')

@section('content-title', 'Nova Postagem')

@section('content')
    <form action="{{ route('postagem.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" name="postagem_titulo">
        </div>
        <div class="form-group">
            <label for="">Texto</label>
            <textarea name="postagem_texto" class="form-control" rows="5  "></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection()