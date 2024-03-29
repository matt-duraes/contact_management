@extends('layouts.main')
@section('title', 'Editando:'.$contato->nome)
@section('content')
<h1>Editando: {{$contato->nome}}</h1>
    <div id="event-create-container" class="col-md-6 offset md-3">
        <form action="{{ route('atualizarContato', $contato->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do contato" value="{{$contato->nome}}">
            </div>
            <br>
            <div class="form-group">
                <label for="email">Endereço de Email: </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Endereço de Email" value="{{$contato->email}}">
            </div>
            <br>
            <div class="form-group">
                <label for="contato">Telefone</label>
                <input type="number" class="form-control" name="contato" id="contato"  value="{{$contato->contato}}">
                <br>
            </div>
            <input type="submit" value="Editar contato" class="btn btn-primary">
        </form>
    </div>
@endsection

