@extends('layouts.admin')

@section('content-title', 'Postagens')

@section('content')
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

    @if(count($postagem))
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Upvotes</th>
                    <th>Downvotes</th>
                    <th>Data de publicação</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($postagem as $postagem)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $postagem->postagem_titulo }}</td>
                        <td>{{ $postagem->postagem_up }}</td>
                        <td>{{ $postagem->postagem_down }}</td>
                        <td>{{ $postagem->postagem_data_publicacao }}</td>
                        <td><a href="{{ route('postagem.show', $postagem->postagem_id) }}">Ver</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection()