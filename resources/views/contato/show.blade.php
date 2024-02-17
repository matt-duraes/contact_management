@extends('layouts.main')
@section('title', $contato->nome)
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <p>{{$contato->nome}}</p>
    </div>
    <div class="row">
        <p>{{$contato->email}}</p>
    </div>
    <div class="row">
        <p>{{$contato->telefone}}</p>
    </div>
</div>

@endsection