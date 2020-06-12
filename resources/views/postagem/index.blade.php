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

    @if(count($postagens))       
        @foreach($postagens as $postagens)
            <div class="card mt-8">
                <div class="card-body">
                    <h3>{{ $postagens->postagem_titulo }}</h3>
                    <p>{{ $postagens->postagem_data_publicacao }}</p>
                    <a href="{{ route('postagem.show', $postagens->postagem_id) }}">Ver</a>
                </div>
            </div><br>
        @endforeach
    @endif
@endsection()