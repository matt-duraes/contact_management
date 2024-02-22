@extends('layouts.main')
@section('title', 'HomeContato')
@section('content')

<div class="bloco_home">
    <div class="bloco_conteudo">
        <h1>ORGANIZE-SE</h1>
        <p>Organize seus contatos da melhor maneira utilizando nossa plataforma</p>
        <a class="nav-link" href="{{route('dashboard')}}">
            Ver contatos
        </a>
    </div>
</div>
@endsection
