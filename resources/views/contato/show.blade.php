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
<!--     <td>
        <a href="{{route('editarContato', $contato->id)}}" class="btn btn-primary">
            Editar
        </a>
    </td> -->
    <td>
        <form action="{{route('deletarContato', $contato->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete-btn">
                Deletar
            </button>
        </form>
    </td>
</div>

@endsection