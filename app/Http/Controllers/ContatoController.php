<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();
        return view('home.index', [
            'contatos' => $contatos
        ]);
    }

    public function create()
    {
        return view('contato.create');
    }
    
    
    public function store(Request $request) {
        $dados = $this->validate($request, [
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:contatos',
            'contato' => 'required|max:255',
        ]);

        $contato = Contato::create($dados);

        return redirect('/')->with('msg', "{$contato->nome} cadastrado com sucesso!");
    }

    public function show($id) {
        $contato = Contato::findOrFail($id);
        return view ('contato.show',[
            'contato' => $contato
        ]);
    }

    public function destroy($id) {
        Contato::findOrFail($id)->delete();

        return redirect('/')->with('msg', "Contato Deletado com sucesso!");
    }

    public function edit($id) {
        $contato = Contato::findOrFail($id);

        return view('contato.edit',[
            'contato' => $contato
        ]);
    }
}