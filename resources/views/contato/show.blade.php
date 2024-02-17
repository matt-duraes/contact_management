@extends('layouts.main')
@section('title', $contato->nome)
@section('content')

<div>
    <h1>Dados do usuário</h1>
    <br>
    <div class="row">
        <p>{{$contato->nome}}</p>
    </div>
    <div class="row">
        <p>{{$contato->email}}</p>
    </div>
    <div class="row">
        <p>{{$contato->contato}}</p>
    </div>
</div>

@endsection