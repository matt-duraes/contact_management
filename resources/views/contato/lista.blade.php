@extends('layouts.main')
@section('title', 'lista')
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
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
