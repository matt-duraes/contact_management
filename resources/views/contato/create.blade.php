@extends('layouts.main')
@section('title', 'Criar Contato')
@section('content')
<div id="event-create-container" class="col-md-6 offset md-3">
    <form action="/contato" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do contato">
            <br>
        </div>
        <div class="form-group">
            <label for="email">Endereço de Email: </label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Endereço de Email">
            <br>
        </div>
        <div class="form-group">
            <label class="form-label" for="contato">Telefone</label>
            <input type="number" name="contato" id="contato" class="form-control">
            <br>
        </div>
        <input type="submit" value="Criar contato" class="btn btn-primary">
    </form>
</div>
@endsection

