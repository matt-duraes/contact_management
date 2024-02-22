@extends('layouts.main')
@section('title', 'list')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Contato</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contatos as $contato)
            <tr class="flex">
                <th scope="row">{{$contato->id}}</th>
                <td>
                    <a href="/contato/{{$contato->id}}">
                        {{$contato->nome}}
                    </a>
                </td>
                <td>{{$contato->email}}</td>
                <td>{{$contato->contato}}</td>
                @auth
                    <td>
                        <a href="{{route('editarContato', $contato->id)}}" class="btn btn-primary">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{route('deletarContato', $contato->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">
                                Deletar
                            </button>
                        </form>
                    </td>
                @endauth
            </tr>

        @endforeach
    </tbody>
</table>
@endsection
