@extends('layouts.admin')

@section('titulo', 'Sobre..::')

@section('conteudo-titulo', 'Sobre')

@section('conteudo')
    <div class="title m-b-mb">
        Page Sobre utilizando Blade Template
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pedro Almeida</td>
                <td>pedrin@gmail.com</td>
            </tr>
        </tbody>
    </tablw>
@endsection