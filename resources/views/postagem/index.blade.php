@extends('layouts.admin')

@section('content-title', 'Postagens')

@section('content')
<a href="{{ route('postagem.create') }}" class="btn btn-primary">Nova Postagem</a>
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

    @if(count($postagens))       
        @foreach($postagens as $postagens)
            <div class="card mt-8">
                <div class="card-body">
                    <a href="{{ route('postagem.show', $postagens->postagem_id) }}"><h3>{{ $postagens->postagem_titulo }}</h3></a>
                    <p>Por AUTOR ::: </p>
                    <p>{{ $postagens->postagem_data_publicacao }}</p>
                </div>
            </div><br>
        @endforeach
    @endif
@endsection()